<?php
session_start();
require_once("assets/config/config.php");
require_once("assets/config/db_config.php");
require_once("assets/config/functions.php");
if(isAuthenticated()) {
    redirection('index.php');
}
require_once("assets/php/header.php");
require_once("assets/php/guest-navbar.php");
require_once("assets/php/header.php");
require_once("assets/contents/register-content.php");
?>