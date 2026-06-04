<?php
if (!defined('DB_SERVER')) {
    define('DB_SERVER', 'sql209.infinityfree.com');
    define('DB_USERNAME', 'if0_40100808');
    define('DB_PASSWORD', 'vtmJQjQR4Vlhzag');
    define('DB_NAME', 'if0_40100808_cool1337');
}

// Check if connection already exists
if(!isset($link) || $link === false) {
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($link === false){
        die("There was an error connecting to database: " . mysqli_connect_error());
    }
}

// Only set these if they don't exist
if(!isset($conn)) {
    $conn = $link;
}
if(!isset($mysqli)) {
    $mysqli = $conn;
}
?>