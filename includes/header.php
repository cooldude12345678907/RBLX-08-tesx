<?php 
session_start();
require("maintenancecontrol.php");
require("config.php");  

if ($dst === true) {
    header('Location: /dst.aspx');
    exit;
}
if ($repr === true) {
    header('Location: /repairing.aspx');
    exit;
}

// Проверяем, не обходил ли пользователь maintenance
if ($maintenance === true && !(isset($_SESSION['bypass_maintenance']) && $_SESSION['bypass_maintenance'] === true)) {
    header('Location: maintenance.aspx');
    exit;
}

if ($comingsoon === true) {
    header('Location: Soon.aspx');
    exit;
}

if ($close === true) {
    header('Location: bye.aspx');
    exit;
}
    
// Убрал дублирующий require('config.php');

if($loggedin == 'yes') {
    if($_USER['bantype'] !== 'None'){
        header("Location: /Membership/NotApproved.aspx");
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" id="www-roblox-com">
<head>
<title>
  <?=$sitename?>: A FREE Virtual World-Building Game with Avatar Chat, 3D Environments, and Physics
</title>
<link id="ctl00_Imports" rel="stylesheet" type="text/css" href="/CSS/AllCSS.css?v=<?php echo rand(1,9999); ?>"/>
<link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico"/>
<script src="/ScriptResource.axd" type="text/javascript"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/CSS/Tabs.css?v=<?php echo rand(1,9999); ?>" />
<script src="/CSS/Tabs.js" type="text/javascript"></script>
</head>
<body>



<div id="Container">
<div id="AdvertisingLeaderboard">
<br>
<?php if ($maintenance === true && isset($_SESSION['bypass_maintenance']) && $_SESSION['bypass_maintenance'] === true): ?>
<div class="SystemAlert">
    <div class="SystemAlertText" style="background-color: red">
        <div class="Exclamation">!</div>
        <div id="sitealert1txt" style="color: white"><center>WARNING : SITE IS UNDER MAINTENANCE!</center></div>
    </div>
</div>
<?php endif; ?>
<br>
</div>
          
<?php if($loggedin == 'no'){ ?>
        <div id="Header">
          <div id="Banner">
                    

<div id="Options">
  <div id="Authentication">
    <span><a id="ctl00_BannerOptionsLoginView_BannerOptions_Anonymous_LoginHyperLink" href="/Login/Default.aspx">Login</a></span>
  </div>
  <div id="Settings"></div>
</div>
                
            <div id="Logo">
                <a id="ctl00_rbxImage_Logo" title="<?=$sitename?>" href="/" style="display:inline-block;cursor:pointer;"><img src="<?php echo $logo; ?>" border="0" alt="<?=$sitename?>" blankurl="http://t6.roblox.com:80/blank-224x59.gif"/></a>
            </div>
            
                    

<div id="Alerts">
    <table style="width:100%;height:100%">
        <tr>
            <td valign="middle"><a id="ctl00_BannerAlertsLoginView_BannerAlerts_Anonymous_rbxAlerts_SignupAndPlayHyperLink" class="SignUpAndPlay" text="Sign-up and Play!" href="/Login/New.aspx?ReturnUrl=%2fGames.aspx" style="display:inline-block;cursor:pointer;"><img src="/images/SignupBanner.png" border="0" blankurl="http://t1.roblox.com:80/blank-210x40.gif"/></a>

</td>
        </tr>
    </table>
</div>
                
          </div>
<?php }else { ?>
        <div id="Header">
          <div id="Banner">
            <div id="Options">
              <div id="Authentication">
                <span><span id="ctl00_lnLoginName">Logged in as <?php echo htmlspecialchars($_USER['username']); ?> | </span><a id="ctl00_lsLoginStatus" href="/Login/Logout.aspx">Logout</a></span>
              </div>
              <div id="Settings">
                <span id="ctl00_lSettings">Age: 13+, Chat Mode: Safe</span>
              </div>
            </div>
            <div id="Logo">
                <a id="ctl00_rbxImage_Logo" title="<?=$sitename?>" href="/" style="display:inline-block;cursor:pointer;"><img src="<?php echo $logo; ?>" border="0" alt="<?=$sitename?>" blankurl="http://t6.roblox.com:80/blank-224x59.gif"/></a>
            </div>
            <div id="Alerts"><table style="width:100%;height:100%"><tr><td valign="middle">

<div id="ctl00_rbxAlerts_AlertSpacePanel">
  
      <div id="AlertSpace">
        

    <?php if($_USER['bux'] > 0) { ?>
        <div id="ctl00_rbxAlerts_RobuxAlertPanel">
          <div id="RobuxAlert">
              <a id="ctl00_rbxAlerts_RobuxAlertIconHyperLink" class="RobuxAlertIcon" href="/My/AccountBalance.aspx"><img src="/images/Robux.png" style="border-width:0px;" /></a>&nbsp;
            <a id="ctl00_rbxAlerts_RobuxAlertCaptionHyperLink" class="RobuxAlertCaption" href="/My/AccountBalance.aspx"><?php echo $_USER['bux']; ?> <?php echo $bux; ?></a>
          </div>
        </div>
     <?php } ?>
     
        <div id="ctl00_rbxAlerts_TicketsAlertPanel">
    
          <div id="TicketsAlert">
              <a id="ctl00_rbxAlerts_TicketsAlertIconHyperLink" class="TicketsAlertIcon" href="/My/AccountBalance.aspx"><img src="/images/Tickets.png" style="border-width:0px;" /></a>&nbsp;
            <a id="ctl00_rbxAlerts_TicketsAlertCaptionHyperLink" class="TicketsAlertCaption" href="/My/AccountBalance.aspx"><?php echo $_USER['tix']; ?> <?php echo $tickets; ?></a>
          </div>
        
  </div>
      </div>

</div></td></tr></table></div>
          </div>
<?php } ?>
          

<div class="Navigation">
  <span><a id="ctl00_Menu_hlMyRoblox" class="MenuItem" href="/User.aspx">My <?=$sitename?></a></span>
  <span class="Separator">&nbsp;|&nbsp;</span>
  <span><a id="ctl00_Menu_hlGames" class="MenuItem" href="/Games.aspx">Games</a></span>
  <span class="Separator">&nbsp;|&nbsp;</span>
  <span><a id="ctl00_Menu_hlCatalog" class="MenuItem" href="/Catalog.aspx">Catalog</a></span>
  <span class="Separator">&nbsp;|&nbsp;</span>
  <span><a id="ctl00_Menu_hlBrowse" class="MenuItem" href="/Browse.aspx">People</a></span>
  <span class="Separator">&nbsp;|&nbsp;</span>
    <span><a id="ctl00_Menu_hlBuildersClub" class="MenuItem" href="/Upgrades/BuildersClub.aspx">Builders Club</a></span>
  <span class="Separator">&nbsp;|&nbsp;</span>
  <span><a id="ctl00_Menu_hlForum" class="MenuItem" href="#">Forum</a></span>
  <span class="Separator">&nbsp;|&nbsp;</span>
  <span><a id="ctl00_Menu_hlNews" class="MenuItem" href="#" target="_blank">News</a>&nbsp;<a id="ctl00_Menu_hlNewsFeed" href="#"><img src="/images/feed-icons/feed-icon-14x14.png" alt="RSS" border="0"/></a></span>
  <span class="Separator">&nbsp;|&nbsp;</span>
  <span><a id="ctl00_Menu_hlParents" class="MenuItem" href="/Parents.aspx">Parents</a></span>
  <span class="Separator">&nbsp;|&nbsp;</span>
  <span><a id="ctl00_Menu_hlHelp" class="MenuItem" href="#" target="_blank">Help</a></span>
</div>
</div>
<div id="Body">