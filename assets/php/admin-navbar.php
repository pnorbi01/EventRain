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
<header class="site-header p-3 mb-3 sticky-top">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
            <img src="assets/images/logo.png" width="45px" height="45px">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="events.php" class="nav-link px-2 link-dark">Events</a></li>
                <li><a href="my-reserved-gifts.php" class="nav-link px-2 link-dark">My Reserved Gifts</a></li>
            </ul>

            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/profile-pictures/<?= $result["image"] ?>" alt="profilePicture" width="35" height="35" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small " aria-labelledby="dropdownUser1">
                    <li class="verified">
                        <a class="dropdown-item verifiedText"><img src="assets/images/verified.png" width="20px" height="20px"> Verified Account</a>
                    </li>
                    <hr class="dropdown-divider">
                    <li>
                        <a class="dropdown-item" href="admin-panel.php">Admin Panel</a>
                    </li>
                    <hr class="dropdown-divider">
                    <li>
                        <a class="dropdown-item" href="edit-profile.php">Profile</a>
                    </li>
                    <hr class="dropdown-divider">
                    <li>
                        <a class="dropdown-item dropdown-item-danger" href="assets/php/logout.php"><i class="bi bi-box-arrow-right"></i> Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>