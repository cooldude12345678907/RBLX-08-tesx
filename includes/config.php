<?php
require 'data.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$errors = 0;
if($errors == 1){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}else{
    error_reporting(0);
    ini_set('display_errors', 0);
}  

// Check if database connection is established
if (!isset($link) || $link === null) {
    die("Database connection failed");
}

//download link
$download = "/download/rust.zip";

$renderServer = "88.201.206.26:64989";
$versions = "2008";

//for renders
require_once("RCC.php");
$RCCServiceSoap = new RCCServiceSoap08("88.201.206.26", 64989, "roblox.com", true);

$buxalt = "R$";
$ticketsalt = "Tx";

// Initialize $_USER as null
$_USER = null;
$loggedin = 'no';

// Only attempt database operations if connection exists and user is logged in
if (isset($_SESSION['username']) && $link) {
    $loggedin = 'yes';

    $stmt = $link->prepare("SELECT * FROM users WHERE username = ?");
    if ($stmt) {
        $stmt->bind_param("s", $_SESSION['username']);
        $stmt->execute();
        $result = $stmt->get_result();
        $_USER = $result->fetch_assoc();
        $stmt->close();

        if ($_USER) {
            $time = time();
            $stmt = $link->prepare("UPDATE users SET lastseen = ? WHERE id = ?");
            if ($stmt) {
                $stmt->bind_param("ii", $time, $_USER['id']);
                $stmt->execute();
                $stmt->close();
            }
            
            //names
            if($_USER['theme'] == 'Roblox 2008') {
                $sitename = "ROBLOX";
                $sitename2 = "Roblox";
                $sitename3 = "roblox";
                $slogan = "Online Building Toy.";
                $bux = "ROBUX";
                $tickets = "Tickets";
                $corporation = "ROBLOX Corp";
                $sitelink = "roblox.com";
                $sitelink2 = "ROBLOX.COM";
                $sitelink3 = "Roblox.com";
                
                $logo = "/images/Roblox%20Logo%20Election%2008.png";
            } else {
                $sitename = "ROBLOX";
                $sitename2 = "Roblox";
                $sitename3 = "roblox";
                $slogan = "A Building Toy.";
                $bux = "ROBUX";
                $tickets = "Tickets";
                $corporation = "ROBLOX Corp";
                $sitelink = "tesx.ct.ws";
                $sitelink2 = "tesx.ct.ws";
                $sitelink3 = "tesx.ct.ws";
                
                $logo = "/images/Roblox%20Logo%20Election%2008.png";
            }
        }
    }
} else {
    // Default values for non-logged in users
    $sitename = "ROBLOX";
    $sitename2 = "Roblox";
    $sitename3 = "roblox";
    $slogan = "A Building Toy.";
    $bux = "ROBUX";
    $tickets = "Tickets";
    $corporation = "ROBLOX Corp";
    $sitelink = "tesx.ct.ws";
    $sitelink2 = "tesx.ct.ws";
    $sitelink3 = "tesx.ct.ws";
    $logo = "/images/Roblox%20Logo%20Election%2008.png";
    $loggedin = 'no';
}

// Your color arrays remain the same...
$RobloxColors = array(1, 208, 194, 199, 26, 21, 24, 226, 23, 107, 102, 11, 45, 135, 106, 105, 141, 28, 37, 119, 29, 151, 38, 192, 104, 9, 101, 5, 153, 217, 18, 125);

$RobloxColorsHtml = array(
    "#F2F3F2", "#E5E4DE", "#A3A2A4", "#635F61", "#1B2A34", "#C4281B", 
    "#F5CD2F", "#FDEA8C", "#0D69AB", "#008F9B", "#6E99C9", "#80BBDB", 
    "#B4D2E3", "#74869C", "#DA8540", "#E29B3F", "#27462C", "#287F46", 
    "#4B974A", "#A4BD46", "#A1C48B", "#789081", "#A05F34", "#694027", 
    "#6B327B", "#E8BAC7", "#DA8679", "#D7C599", "#957976", "#7C5C45", 
    "#CC8E68", "#EAB891"
);
?>