<?php
session_start();
require_once('../config/db_config.php');
require_once('../config/config.php');
require_once('../config/functions.php');

if(isset($_POST["changeProfilePicture"])) {
    
    if (empty($_FILES['file']["name"])) {
        redirection("../../edit-profile.php?m=10");
        exit();
    }
    
    if ($_FILES['file']["error"] > 0) {
        redirection("../../edit-profile.php?m=11");
        exit();
    }
    
    if (!is_uploaded_file($_FILES['file']['tmp_name'])) {
        redirection("../../edit-profile.php?m=12");
        exit();
    }

    if ($_FILES["file"]["size"] > 300000){
        redirection("../../edit-profile.php?m=13");
        exit();
    }

    if (exif_imagetype($_FILES["file"]["tmp_name"]) == 2 || exif_imagetype($_FILES["file"]["tmp_name"]) == 3) {
        $directory = "../../assets/images/profile-pictures/";

        ["extension" => $extension] = pathinfo($_FILES["file"]["name"]);

        $newFileName = md5(time()."-".rand(100,200)).".".$extension;

        if(!move_uploaded_file($_FILES['file']["tmp_name"], $directory.$newFileName)) {
            redirection("../../edit-profile.php?m=14");
            exit();
        }

        global $dsn, $pdoOptions;
        $pdo = connectDatabase($dsn, $pdoOptions);

        $sql = "UPDATE users SET image = :image WHERE user_id = :id";

        $query = $pdo->prepare($sql);
        $query->bindParam(':image', $newFileName, PDO::PARAM_STR);
        $query->bindParam(':id', $_SESSION["id_user"], PDO::PARAM_INT);
        $query->execute();

        if($query->rowCount() == 1) {
            redirection("../../edit-profile.php?m=15");
        }
        else {
            redirection("../../edit-profile.php?m=14");
        }
    }
    else {
        redirection("../../edit-profile.php?m=16");
        exit();
    }     
} 
?>
