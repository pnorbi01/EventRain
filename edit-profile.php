<?php
session_start();
require_once("assets/config/config.php");
require_once("assets/config/db_config.php");
require_once("assets/config/functions.php");
require_once("assets/php/header.php");
if(!isAuthenticated()){
    redirection('index.php');
}
if(isAdmin($_SESSION['id_user'])) {
    require_once("assets/php/admin-navbar.php");
}
else{
    require_once("assets/php/user-navbar.php");
}
require_once("assets/contents/edit-profile-content.php");
?>
