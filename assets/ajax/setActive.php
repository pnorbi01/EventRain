<?php
require_once('../config/config.php');
require_once('../config/db_config.php');
require_once('../config/functions.php');

if (isset($_POST['id'])) {
    $event_id = (int)$_POST['id'];
    setActive($event_id);
}