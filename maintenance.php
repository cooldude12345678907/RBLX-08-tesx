<?php
session_start();
require("includes/maintenancecontrol.php");

// pass is coolestpasswordever1337
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['pww']) && $_POST['pww'] === $correct_password) {
        $_SESSION['bypass_maintenance'] = true;
        header('Location: /');
        exit;
    } else {
    }
}


if (isset($_SESSION['bypass_maintenance']) && $_SESSION['bypass_maintenance'] === true) {
    header('Location: /');
    exit;
}
?>

<html style="--wm-toolbar-height: 67px;">
<head>
    <script src="//archive.org/includes/athena.js" type="text/javascript"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>ROBLOX : Maintenance</title> 
    <style type="text/css"> 
        .content { 
            width: 800px;
            margin-top: 0px;
            margin-bottom: 10px;
            margin-right: auto;
            margin-left: auto;
            text-align: justify;
        }
        .error {
            color: red;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body style="background:rgb(0,0,0); color:white;">
    <div style="width:900px;margin:auto;">
        <img style="display:block;margin:auto;" src="/images/Roblox%20Logo%20Election%2008.png"> 
        <div class="content"> 
            <p style="text-align: center">&nbsp;</p>
            <p style="text-align: center">
                <img src="/images/robloxteamsitedownimage1.jpg" id="ctl00_cphRoblox_imgRobloxTeam" alt="Offline">
            </p>
            <p style="text-align: center; font-size: 14px;font-family:sourcesans;letter-spacing: 0.2px;font-style: normal;">
                The site is currently offline for maintenance and upgrades. Please check back soon! 
            </p>
            
            <?php if (isset($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
            
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p>
                <form method="post">
                <input name="pww" type="password">
                <input type="submit" name="R" value="R">
                <input type="submit" name="O" value="O">
                <input type="submit" name="B" value="B">
                <input type="submit" name="L" value="L">
                <input type="submit" name="O" value="O">
                <input type="submit" name="X" value="X">
                </form>
            </p>
        </div>
        <br><br>
        <div style="font: normal 7pt/normal Verdana, sans-serif;text-align:center;">
            <div id="Footer">
                <hr>
                <?php require("includes/footer.php"); ?>
            </div>
            <br>
            <br>
            <p></p>
        </div>
    </div>
    
    <script type="text/javascript"> 
        window.window.setTimeout("window.location = '/'", 60000);
    </script>     
</body>
</html>