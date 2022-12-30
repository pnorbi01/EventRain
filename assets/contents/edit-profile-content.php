<?php
require_once("assets/config/config.php");
require_once("assets/config/db_config.php");

global $dsn, $pdoOptions;
$pdo = connectDatabase($dsn, $pdoOptions);

$sql = "SELECT * FROM users WHERE user_id = :id";
$query = $pdo->prepare($sql);
$query->bindParam(':id', $_SESSION["id_user"], PDO::PARAM_INT);
$query->execute();

if ($query->rowCount() == 1) {
    $result = $query->fetch();
}
?>

<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">Profile Picture</div><br>
                <?php
                if($result["level"] == "admin"){
                ?>
                <div class="text-center text-sm-right">
                    <span class="badge rounded-pill bg-warning">Administrator</span><br>
                    <small style="color: #69707a;">Joined <?= $result["date_time"] ?></small>
                </div>
                <?php
                } else { ?>
                <div class="text-center text-sm-right">
                    <small style="color: #69707a;">Joined <?= $result["date_time"] ?></small>
                </div>
                <?php
                }
                ?>
                <div class="card-body text-center">
                    <img class="img-account-profile rounded-circle mb-2" src="assets/images/profile-pictures/<?= $result["image"] ?>" alt="profilePicture" width="170" height="50">
                    <div class="small font-italic text-muted mb-4">Only JPEG or PNG and no larger than 300 MB!</div>
                    <form method="post" action="assets/action/change-profile-picture-action.php" enctype="multipart/form-data">
                        <input class="form-control form-control-sm" name="file" type="file"><br>
                        <input class="btn btn-outline-danger" name="changeProfilePicture" value="Change Photo" type="submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                <?php
                            if (isset($_GET['m']) and array_key_exists($_GET['m'], $messages[$page])) {
                                echo '<div class="alert alert-' . $messages[$page][$_GET['m']]['style'] . ' alert-dismissible fade show" role="alert" id="message">' . $messages[$page][$_GET['m']]['text'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            }
                        ?>
                    <form method="post" action="assets/action/edit-user-data-action.php">
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username</label>
                            <input class="form-control" id="inputUsername" name="inputUsername" type="text" value="<?= $result["username"] ?>">
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First Name</label>
                                <input class="form-control" id="inputFirstName" name="inputFirstName" type="text" value="<?= $result["firstname"] ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last Name</label>
                                <input class="form-control" id="inputLastName" name="inputLastName" type="text" value="<?= $result["lastname"] ?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email Address</label>
                            <input class="form-control" id="inputEmailAddress" name="inputEmailAddress" type="email" value="<?= $result["email"] ?>">
                        </div>
                        <input class="btn btn-outline-primary" name="editUserData" type="submit" value="Save Changes">
                    </form><br>

                    <form method="post" action="assets/action/edit-user-password-action.php">
                        <div class="row gx-3 mb-3">
                            <div class="col-md-12">
                                <label class="small mb-1" for="inputOldPassword">Old Password</label>
                                <input class="form-control" id="inputOldPassword" type="password" name="oldPassword">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputNewPassword">New Password</label>
                                <input class="form-control" id="inputNewPassword" type="password" name="newPassword">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputNewPasswordVerify">New Password Confirmation</label>
                                <input class="form-control" id="inputNewPasswordVerify" type="password" name="newPasswordVerify">
                            </div>
                        </div>
                        <input class="btn btn-outline-primary" type="submit" name="editUserPassword" value="Update Password">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>