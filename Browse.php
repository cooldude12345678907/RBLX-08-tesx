<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/includes/header.php");

$mysqli = $link;

$records_per_page = 10;

// Get total users count
$query = "SELECT COUNT(*) AS total_users FROM users";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$total_users = $row['total_users'];

$total_pages = ceil($total_users / $records_per_page);

$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

if ($current_page > $total_pages) {
    $current_page = $total_pages;
}
if ($current_page < 1) {
    $current_page = 1;
}

$start_from = ($current_page - 1) * $records_per_page;

// Get users with pagination
$query = "SELECT * FROM users ORDER BY lastseen DESC LIMIT ?, ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ii", $start_from, $records_per_page);
$stmt->execute();
$result = $stmt->get_result();
?>

<div id="ctl00_cphRoblox_Panel1">
    <div id="BrowseContainer" style="text-align:center">
        <input name="ctl00$cphRoblox$FormSubmitWithoutOnClickEventWorkaround" type="text" value="http://aspnet.4guysfromrolla.com/articles/060805-1.aspx" id="ctl00_cphRoblox_FormSubmitWithoutOnClickEventWorkaround" style="visibility:hidden;display:none;"/>
        <input name="ctl00$cphRoblox$tbSearch" type="text" maxlength="100" id="ctl00_cphRoblox_tbSearch"/>&nbsp;<a id="ctl00_cphRoblox_lbSearch" href="javascript:__doPostBack('ctl00$cphRoblox$lbSearch','')">Search</a>
        <br/><br/>
        
        <div>
            <table class="Grid" cellspacing="0" cellpadding="4" border="0" id="ctl00_cphRoblox_gvUsersBrowsed">
                <tr class="GridHeader">
                    <th scope="col">Avatar</th>
                    <th scope="col"><a href="javascript:__doPostBack('ctl00$cphRoblox$gvUsersBrowsed','Sort$userName')">Name</a></th>
                    <th scope="col">Status</th>
                    <th scope="col"><a href="javascript:__doPostBack('ctl00$cphRoblox$gvUsersBrowsed','Sort$lastActivity')">Location / Last Seen</a></th>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    while ($user = $result->fetch_assoc()) {
                        // Fix for the deprecated warning - check if description is null
                        $description = $user['description'] ?? '';
                        $decoded_description = htmlspecialchars_decode($description);
                        
                        // Determine online status
                        $is_online = ($user['lastseen'] + 300 >= time());
                        $status = $is_online ? 'Online' : 'Offline';
                        $location = $is_online ? 'Website' : date('d/m/Y g:i A', (int)$user['lastseen']);
                ?>
                <tr class="GridItem">
                    <td>
                        <a id="ctl00_cphRoblox_gvUsersBrowsed_hlAvatar_<?php echo $user['id']; ?>" 
                           title="<?php echo htmlspecialchars($user['username']); ?>" 
                           href="User.aspx?ID=<?php echo $user['id']; ?>" 
                           style="display:inline-block;cursor:pointer;">
                            <img src="/Thumbs/Avatar.ashx?id=<?php echo $user['id']; ?>&rand=<?php echo rand(1,9999); ?>" 
                                 width="48" height="48" border="0" 
                                 alt="<?php echo htmlspecialchars($user['username']); ?>"/>
                        </a>
                    </td>
                    <td>
                        <a id="ctl00_cphRoblox_gvUsersBrowsed_hlName_<?php echo $user['id']; ?>" 
                           href="User.aspx?ID=<?php echo $user['id']; ?>">
                            <?php echo htmlspecialchars($user['username']); ?>
                        </a><br/>
                        <span id="ctl00_cphRoblox_gvUsersBrowsed_lBlurb_<?php echo $user['id']; ?>">
                            <?php echo $decoded_description; ?>
                        </span>
                    </td>
                    <td>
                        <span id="ctl00_cphRoblox_gvUsersBrowsed_lblUserOnlineStatus_<?php echo $user['id']; ?>">
                            <?php echo $status; ?>
                        </span><br/>
                    </td>
                    <td>
                        <span id="ctl00_cphRoblox_gvUsersBrowsed_lblUserLocationOrLastSeen_<?php echo $user['id']; ?>">
                            <?php echo $location; ?>
                        </span>
                    </td>
                </tr>
                <?php
                    }
                } else {
                    echo '<tr class="GridItem"><td colspan="4" style="text-align:center;">No users found.</td></tr>';
                }
                ?>
                
                <!-- Pagination -->
                <?php if ($total_pages > 1): ?>
                <tr class="GridPager">
                    <td colspan="4">
                        <table border="0">
                            <tr>
                                <?php
                                // Previous page link
                                if ($current_page > 1) {
                                    echo '<td><a href="?page='.($current_page - 1).'">&laquo; Previous</a></td>';
                                }
                                
                                // Page numbers
                                $max_visible_pages = 10;
                                $start_page = max(1, $current_page - floor($max_visible_pages / 2));
                                $end_page = min($total_pages, $start_page + $max_visible_pages - 1);
                                
                                // Adjust start page if we're near the end
                                if ($end_page - $start_page < $max_visible_pages - 1) {
                                    $start_page = max(1, $end_page - $max_visible_pages + 1);
                                }
                                
                                // First page and ellipsis
                                if ($start_page > 1) {
                                    echo '<td><a href="?page=1">1</a></td>';
                                    if ($start_page > 2) {
                                        echo '<td><span>...</span></td>';
                                    }
                                }
                                
                                // Page numbers
                                for ($i = $start_page; $i <= $end_page; $i++) {
                                    if ($i == $current_page) {
                                        echo '<td><span><strong>'.$i.'</strong></span></td>';
                                    } else {
                                        echo '<td><a href="?page='.$i.'">'.$i.'</a></td>';
                                    }
                                }
                                
                                // Last page and ellipsis
                                if ($end_page < $total_pages) {
                                    if ($end_page < $total_pages - 1) {
                                        echo '<td><span>...</span></td>';
                                    }
                                    echo '<td><a href="?page='.$total_pages.'">'.$total_pages.'</a></td>';
                                }
                                
                                // Next page link
                                if ($current_page < $total_pages) {
                                    echo '<td><a href="?page='.($current_page + 1).'">Next &raquo;</a></td>';
                                }
                                ?>
                            </tr>
                        </table>
                    </td>
                </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</div>

<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php");
?>