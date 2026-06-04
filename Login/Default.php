<?php
require_once($_SERVER['DOCUMENT_ROOT']."/includes/header.php");

// Check if already logged in
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: /");
    exit;
}

$error = '';
$username = '';

// Process login form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['UserName'] ?? '');
    $password = $_POST['Password'] ?? '';
    
    // Validate inputs
    if (empty($username) || empty($password)) {
        $error = "Please enter both username and password.";
    } else {
        // Use prepared statement with mysqli (consistent with your other code)
        $stmt = $link->prepare("SELECT id, username, password, perms, bantype FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
        
        if ($user) {
            // Check if user is banned
            if ($user['bantype'] !== 'None') {
                $error = "This account has been restricted. Please contact support.";
            } 
            // Verify password (assuming passwords are hashed with password_hash())
            elseif (password_verify($password, $user['password'])) {
                // Successful login
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $user["id"];
                $_SESSION["username"] = $user["username"];
                $_SESSION["perms"] = $user["perms"];
                
                // Update last seen timestamp
                $update_stmt = $link->prepare("UPDATE users SET lastseen = ? WHERE id = ?");
                $current_time = time();
                $update_stmt->bind_param("ii", $current_time, $user['id']);
                $update_stmt->execute();
                $update_stmt->close();
                
                // Redirect to intended page or default
                header("location: " . ($_GET['ReturnUrl'] ?? '/'));
                exit;
            } else {
                $error = "Invalid username or password.";
            }
        } else {
            $error = "Invalid username or password.";
        }
    }
}
?>

<div id="Body">
    <div id="FrameLogin" style="margin: 50px auto 150px auto; width: 500px; border: black thin solid; padding: 21px; z-index: 8; background-color: white;">
        <div id="PaneNewUser">
            <h3>New User?</h3>
            <p>You need an account to play <?=$sitename?>.</p>
            <p>If you aren't a <?=$sitename?> member then <a id="ctl00_cphRoblox_HyperLink1" href="/Login/NewAge.aspx">register</a>. It's easy and we do <em>not</em> share your personal information with anybody.</p>
        </div>
        
        <div id="PaneLogin">
            <h3>Log In</h3>
            
            <?php if (!empty($error)): ?>
                <div style="color: red; text-align: center; padding: 10px; margin-bottom: 15px; border: 1px solid red; background-color: #ffe6e6;">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>
            
            <div class="AspNet-Login">
                <form method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) . (!empty($_GET['ReturnUrl']) ? '?ReturnUrl=' . urlencode($_GET['ReturnUrl']) : '') ?>">
                    <div class="AspNet-Login-UserPanel">
                        <label for="ctl00_cphRoblox_lRobloxLogin_UserName" class="TextboxLabel"><em>U</em>ser Name:</label>
                        <input type="text" id="ctl00_cphRoblox_lRobloxLogin_UserName" name="UserName" value="<?= htmlspecialchars($username) ?>" accesskey="u" required>
                    </div>
                    
                    <div class="AspNet-Login-PasswordPanel">
                        <label for="ctl00_cphRoblox_lRobloxLogin_Password" class="TextboxLabel"><em>P</em>assword:</label>
                        <input type="password" id="ctl00_cphRoblox_lRobloxLogin_Password" name="Password" value="" accesskey="p" required>
                    </div>
                    
                    <div class="AspNet-Login-SubmitPanel">
                        <input type="submit" value="Log In" id="ctl00_cphRoblox_lRobloxLogin_LoginButton" name="LoginButton">
                    </div>
                    
                    <div class="AspNet-Login-PasswordRecoveryPanel">
                        <a href="ResetPasswordRequest.aspx" title="Password recovery">Forgot your password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT']."/includes/footer.php");
?>