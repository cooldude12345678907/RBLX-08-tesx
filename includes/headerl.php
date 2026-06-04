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


require("maintenancecontrol.php");
require("config.php");  

    
  if ($dst === true) {
    header('Location: /dst.php');
    exit;
}
  if ($repr === true) {
    header('Location: /repairing.php');
    exit;
}

if ($maintenance === true) {
    header('Location: /maintenance/');
    exit;
}
if ($comingsoon === true) {
    header('Location: Soon.php');
    exit;
}

if ($close === true) {
    header('Location: bye.php');
    exit;
}

if ($testing) {
error_reporting(E_ALL);
ini_set('display_errors', 1);
}



  




  

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" id="www-roblox-com" style="--wm-toolbar-height: 67px;"><!-- MachineID: App1 --><head><script src="//archive.org/includes/athena.js" type="text/javascript"></script>
<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app244.us.archive.org';v.server_ms=385;archive_analytics.send_pageview({});});</script>
<script type="text/javascript" src="https://web-static.archive.org/_static/js/bundle-playback.js?v=Hk4-lkW3" charset="utf-8"></script>
<script type="text/javascript" src="https://web-static.archive.org/_static/js/wombat.js?v=txqj7nKC" charset="utf-8"></script>
<script>window.RufflePlayer=window.RufflePlayer||{};window.RufflePlayer.config={"autoplay":"on","unmuteOverlay":"hidden","showSwfDownload":true};</script>
<script type="text/javascript" src="https://web-static.archive.org/_static/js/ruffle/ruffle.js"></script>
<script type="text/javascript">
    __wm.init("https://web.archive.org/web");
  __wm.wombat("http://www.roblox.com:80/","20080514222834","https://web.archive.org/","web","https://web-static.archive.org/_static/",
	      "1210804114");
</script>
<link rel="stylesheet" type="text/css" href="https://web-static.archive.org/_static/css/banner-styles.css?v=1utQkbB3">
<link rel="stylesheet" type="text/css" href="https://web-static.archive.org/_static/css/iconochive.css?v=3PDvdIFv">
<!-- End Wayback Rewrite JS Include -->
<title>
	<?=$sitename?>: A FREE Virtual World-Building Game with Avatar Chat, 3D Environments, and Physics
</title><link id="ctl00_Imports" rel="stylesheet" type="text/css" href="/CSS/AllCSS.css"><link id="ctl00_Favicon" rel="Shortcut Icon" type="image/ico" href="/favicon.ico"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="Content-Language" content="en-us"><meta name="author" content="<?=$sitename?> Corporation"><meta name="description" content="<?=$sitename?> is SAFE for kids! <?=$sitename?> is a FREE casual virtual world with fully constructible/desctructible 3D environments and immersive physics. Build, battle, chat, or just hang out."><meta name="keywords" content="game, video game, building game, construction game, online game, LEGO game, LEGO, MMO, MMORPG, rowblocks, rowbloks, roblocks, robloks, roblocs, roblok"></head>
	<body><!-- BEGIN WAYBACK TOOLBAR INSERT -->
<script>__wm.rw(0);</script>
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
						<div id="Logo"><a id="ctl00_rbxImage_Logo" title="ROBLOX" href="/" style="display:inline-block;cursor:pointer;"><img src="/images/Roblox%20Logo%20Election%2008.png" border="0" alt="ROBLOX" blankurl="http://t2.roblox.com:80/blank-267x70.gif"></a>

</td></tr></tbody></table></div>
					</div>
            		</div>