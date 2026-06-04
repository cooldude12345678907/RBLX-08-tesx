<?php
include($_SERVER["DOCUMENT_ROOT"]."/includes/config.php");

if(isset($_USER['id'])) {
    $stmt = $link->prepare("UPDATE users SET lastseen = ? WHERE id = ?");
    $now = time();
    $stmt->bind_param("ii", $now, $_USER['id']);
    $stmt->execute();
    $stmt->close();
}

// Clear session data
$_SESSION = array();

// If you want to kill the session, also delete the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

// Redirect to home page
header("Location: /");
exit();
?>