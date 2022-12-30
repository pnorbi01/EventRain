<?php
session_start();
require_once("assets/config/config.php");
require_once("assets/config/db_config.php");
require_once("assets/config/functions.php");
require_once("assets/php/header.php");
if(isAuthenticated() && isAdmin($_SESSION['id_user'])) {
    require_once("assets/php/admin-navbar.php");
}
else if(isAuthenticated()) {
    require_once("assets/php/user-navbar.php");
}
else {
    require_once("assets/php/guest-navbar.php");
}
require_once("assets/contents/index-content.php");
require_once("assets/php/footer.php");
?>