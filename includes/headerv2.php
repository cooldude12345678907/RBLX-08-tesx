<?php

if($loggedin == "yes"){
$uid = $_USER['id'];
  $rightnow = time();

  $q = $db->prepare("UPDATE users SET `lastseen` = :currenttime WHERE id=:id");
  $q->execute(array(":currenttime" => $rightnow, ":id" => $_USER['id']));


if ($_USER['next_tix_reward'] < time()) {
    $dailyreward = 15;
    $nextrew = time() + 86400;

    $q = $db->prepare("UPDATE users SET `tickets` = `tickets` + :dailyreward, `next_tix_reward` = :nextrew WHERE id=:id");
    $q->bindParam(':dailyreward', $dailyreward);
    $q->bindParam(':nextrew', $nextrew);
    $q->bindParam(':id', $_USER['id']);
    $q->execute();


    
  }


$_BANQ = $db->prepare("SELECT * FROM bans WHERE userid=:id");
$_BANQ->execute([':id' => $uid]);
$_BAN = $_BANQ->fetch(PDO::FETCH_ASSOC);
$banrows = $_BANQ->rowCount();

if($banrows > 0 && $_BAN['typeBan'] !== "None"){
$banned = true;
}




if ($result['count'] > 0) {
    $issues = true;
} else {
    $issues = false;
}

}




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

if ($maintenance === true) {
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

if ($testing) {
error_reporting(E_ALL);
ini_set('display_errors', 1);
}



  

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" id="www-roblox-com" style="--wm-toolbar-height: 67px;"><!-- MachineID: App1 --><head>
<link id="ctl00_Imports" rel="stylesheet" type="text/css" href="/CSS/AllCSS.css"><link id="ctl00_Favicon" rel="Shortcut Icon" type="image/ico" href="/favicon.ico"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="Content-Language" content="en-us"><meta name="author" content="<?=$sitename?> Corporation"><meta name="description" content="<?=$sitename?> is SAFE for kids! <?=$sitename?> is a FREE casual virtual world with fully constructible/desctructible 3D environments and immersive physics. Build, battle, chat, or just hang out."><meta name="keywords" content="game, video game, building game, construction game, online game, LEGO game, LEGO, MMO, MMORPG, rowblocks, rowbloks, roblocks, robloks, roblocs, roblok">
    <title>
	ROBLOX: A FREE Virtual World-Building Game with Avatar Chat, 3D Environments, and Physics
</title>
    </head>
	<body><!-- BEGIN WAYBACK TOOLBAR INSERT -->
<div id="wm-ipp-base" lang="en" style="display: block; direction: ltr; height: 67px;" toolbar-mode="auto">
</div><div id="wm-ipp-print"></div>
<!-- END WAYBACK TOOLBAR INSERT -->
 
		<form name="aspnetForm" method="post" action="Default.aspx" id="aspnetForm">




			<div id="Container">
			    
                    
<div id="AdvertisingLeaderboard">
</iframe>
</div>

       			
        <div id="Header">
          <div id="Banner">
            <div id="Options">
              <div id="Authentication">
  <?php if($loggedin == "yes"){ ?> Logged in as <?=$_USER['username']?> &nbsp;<strong>|</strong>&nbsp;<a href="/api/LogoutRequest.php">Logout</a> <?php } else { ?> <a id="ctl00_BannerOptionsLoginView_BannerOptions_Anonymous_LoginHyperLink" href="/Login/Default.aspx">Login</a> <?php } ?>
              </div><?php if($loggedin == "yes"){ ?><div id="Settings">
              Age 13+, Chat Mode: Filter              </div><?php } ?>
            </div>
						<div id="Logo"><a id="ctl00_rbxImage_Logo" title="ROBLOX" href="/index.php" style="display:inline-block;cursor:pointer;"><img src="/images/Roblox%20Logo%20Election%2008.png" border="0" alt="ROBLOX" blankurl="http://t2.roblox.com:80/blank-267x70.gif"></a>
						</div>
                        
						<div id="Alerts"><table style="width:100%;height:100%"><tbody><tr><td valign="middle"><a id="ctl00_rbxAlerts_SignupAndPlayHyperLink" class="SignUpAndPlay" href="Login/New.aspx"><img src="/images/SignupBanner.png" alt="Sign-up and Play!" border="0"></a>

</td></tr></tbody></table></div>
					</div>
            		</div>