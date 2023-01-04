<?php
require_once('assets/config/db_config.php');
require_once('assets/config/config.php');
require_once('assets/config/functions.php');

global $dsn, $pdoOptions;
$pdo = connectDatabase($dsn, $pdoOptions);

if(isset($_GET["id"]) && !empty($_GET["id"])){
    $eventId = $_GET["id"];
}
else {
    redirection("index.php");
}

$status = "available";
$availableGiftSql = "SELECT * FROM gifts WHERE status = :status AND event_id = :event_id";
$availableGiftQuery = $pdo->prepare($availableGiftSql);
$availableGiftQuery->bindParam(':status', $status, PDO::PARAM_STR);
$availableGiftQuery->bindParam(':event_id', $eventId, PDO::PARAM_INT);
$availableGiftQuery->execute();
$availableGiftResult = $availableGiftQuery->fetchAll(PDO::FETCH_ASSOC);

$myGiftSql = "SELECT * FROM gifts WHERE user_id = :user_id AND event_id = :event_id";
$myGiftQuery = $pdo->prepare($myGiftSql);
$myGiftQuery->bindParam(':user_id', $_SESSION["id_user"], PDO::PARAM_INT);
$myGiftQuery->bindParam(':event_id', $eventId, PDO::PARAM_INT);
$myGiftQuery->execute();
$myGiftResult = $myGiftQuery->fetch();

$creatorSql = "SELECT * FROM events, users WHERE event_id = :id AND events.user_id = users.user_id";
$creatorQuery = $pdo->prepare($creatorSql);
$creatorQuery->bindParam(':id', $eventId, PDO::PARAM_INT);
$creatorQuery->execute();
$creatorResult = $creatorQuery->fetch();

$userSql = "SELECT * FROM users, events WHERE events.event_id = :event_id AND users.user_id = :user_id";
$userQuery = $pdo->prepare($userSql);
$userQuery->bindParam(':user_id', $_SESSION["id_user"], PDO::PARAM_INT);
$userQuery->bindParam(':event_id', $eventId, PDO::PARAM_INT);
$userQuery->execute();
$userResult = $userQuery->fetch();

$sql = "SELECT * FROM gifts WHERE event_id = :event_id";
$query = $pdo->prepare($sql);
$query->bindParam(':event_id', $eventId, PDO::PARAM_INT);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="events.php" class="link-dark">Events</a></li>
            <li class=" breadcrumb-item active" aria-current="page"><?php echo $titles[$page] ?></li>
        </ol>
    </nav>
    <div class="row justify-content-center gap-5">
        <div class="list-group my-3 px-5">
        <?php
            if (isset($_GET['m']) and array_key_exists($_GET['m'], $messages[$page])) {
                echo '<div class="alert alert-' . $messages[$page][$_GET['m']]['style'] . ' alert-dismissible fade show" role="alert" id="message">' . $messages[$page][$_GET['m']]['text'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
        ?>
            <div class="d-flex w-100 justify-content-center">
                <h2 class="mb-2 text-center">Wishlist of selected event</h2>
            </div>
            <span>There is <strong><?php echo $availableGiftQuery->rowCount() ?></strong> more available gift(s).</span>
        </div>
        <?php
        if ($query->rowCount() > 0){
            foreach($results as $result){
        ?>
        <div class="card text-center" style="width: 18rem;">
            <?php if($result["status"] == "available") { ?>
            <span
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success"><?= $result["status"] ?></span>
            <?php } 
              else { ?>
            <span
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?= $result["status"] ?></span>
            <?php } ?>
            <div class="card-body">
                <h4 class="card-title"><?= $result["name"] ?></h4>
                <p class="card-text text-start">
                    <small>Event - <strong><?= $creatorResult["event_name"] ?></strong></small><br>
                    <small>Organizer -
                        <strong><?= $creatorResult["lastname"]." ".$creatorResult["firstname"] ?></strong></small>
                </p>
                <?php if($userResult["user_id"] != $_SESSION["id_user"]) { 
                        if($result["status"] == "available") { ?>
                <a href="assets/action/get-gift-action.php?id=<?= $result["gift_id"] ?>&event_id=<?= $eventId ?>" class="btn btn-primary">Get this gift</a>
                <?php 
                        } else { ?>
                <button type="button" class="btn btn-dark disabled">Reserved</button>
                <?php
                        }
                    } 
                    else { ?>
                <a href="assets/action/remove-gift-action.php?id=<?= $result["gift_id"] ?>&event_id=<?= $eventId ?>"
                    class="btn btn-danger">Remove gift</a>
                <?php 
                    } ?>
            </div>
        </div>
        <?php
            }
        } else {
        ?>
        <div class="list-group my-3 px-5">
            <div class="d-flex w-100 justify-content-center">
                <h5 class="mb-2 text-center">This event has no wishlist!</h5>
            </div>
        </div>
        <?php
        }
        ?>
    </div><br>
    <?php if($userResult["user_id"] != $_SESSION["id_user"]) { ?>
    <hr>
    <div class="list-group my-3 px-5">
        <div class="d-flex w-100 justify-content-center">
            <h2 class="mb-2 text-center">Your selected gift for this event</h2>
        </div>
    </div>
    <?php if($myGiftQuery->rowCount() == 1) { ?>
    <div class="row justify-content-center gap-5">
        <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title"><?= $myGiftResult["name"] ?></h4>
                <p class="card-text text-center">This gift is selected by <strong>you</strong>!</p>
                <p class="card-text text-center">Click on <strong>change</strong>, if you want to bring another gift!</p>
                <a href="assets/action/change-gift-action.php?id=<?= $myGiftResult["gift_id"] ?>&event_id=<?= $eventId ?>" class="btn btn-danger">Change</a>
            </div>
        </div>
    </div><br>
    <?php } else { ?>
    <div class="list-group my-3 px-5">
        <div class="d-flex w-100 justify-content-center">
            <h5 class="mb-2 text-center">You did not select any gift yet!</h5>
        </div>
    </div><br>
    <?php }
    } ?>
</div>