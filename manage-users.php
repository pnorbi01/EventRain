<?php
session_start();
require_once("assets/config/config.php");
require_once("assets/config/db_config.php");
require_once("assets/config/functions.php");
if(!isAuthenticated() || !isAdmin($_SESSION["id_user"])) {
    redirection('index.php');
}
require_once("assets/php/header.php");
require_once("assets/php/admin-navbar.php");
require_once("assets/contents/manage-users-content.php");
?>