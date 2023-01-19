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

$selectJoinedEventsSql = "SELECT * FROM invitations WHERE event_id = :id AND invited_user_email = :email";
$joinedEventQuery = $pdo->prepare($selectJoinedEventsSql);
$joinedEventQuery->bindParam(':id', $eventId, PDO::PARAM_INT);
$joinedEventQuery->bindParam(':email', $_SESSION["user_email"], PDO::PARAM_STR);
$joinedEventQuery->execute();
$joinedEventsResult = $joinedEventQuery->fetch();

$creatorSql = "SELECT * FROM events, users WHERE event_id = :id AND events.user_id = users.user_id";
$creatorQuery = $pdo->prepare($creatorSql);
$creatorQuery->bindParam(':id', $eventId, PDO::PARAM_INT);
$creatorQuery->execute();
$creatorResult = $creatorQuery->fetch();

$selectMyEventsSql = "SELECT * FROM events WHERE event_id = :id";
$query = $pdo->prepare($selectMyEventsSql);
$query->bindParam(':id', $eventId, PDO::PARAM_INT);
$query->execute();
$MyEventsResult = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="container ">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="events.php" class="link-dark">Events</a></li>
            <li class=" breadcrumb-item active" aria-current="page"><?php echo $titles[$page] ?></li>
        </ol>
    </nav>
    <div class="px-3 pt-3 my-3 text-start">
        <?php 
            if ($query->rowCount() > 0){
                foreach($MyEventsResult as $result){
        ?>
        <div class="list-group my-3 px-5">
            <div class="list-group-item list-group-item-action" aria-current="true">
                <?php if($result["event_status"] == "private"){?>
                <div class="d-flex w-100 flex-row-reverse">
                    <span class="badge rounded-pill bg-danger"><?= $result["event_status"] ?></span>
                </div>
                <?php 
                } else {
                ?>
                <div class="d-flex w-100 flex-row-reverse">
                    <span class="badge rounded-pill bg-success"><?= $result["event_status"] ?></span>
                </div>
                <?php
                }
                ?>
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?= $result["event_name"] ?></h5>
                </div>
                <p class="mb-1"><?= $result["event_type"] ?></p>
                <small><?= $result["event_location"] ?>, <?= $result["event_street"] ?></small><br><br>
                <small><i class="bi bi-calendar-check-fill"></i> Event created at:
                    <strong><?php echo date("F j, Y, g:i A", strtotime($result["date_time"])); ?></strong></small><br>
                <small><i class="bi bi-clock-fill"></i> Event starts at:
                    <strong><?php echo date("F j, Y, g:i A", strtotime($result["event_start"])); ?></strong></small><br>
                <?php 
                $eventClose = date('F j, Y, g:i A', strtotime($result["event_close"]));
                ?>
                <small><i class="bi bi-door-open-fill"></i> Event closes at:
                    <strong>

                        <?php if(date('F j, Y, g:i A') < $eventClose) { ?>
                        <?= $eventClose ?>
                        <?php } else { ?>
                        <span style="color:#f00;"><strong><i class="bi bi-lock-fill"></i></strong></span>
                        <?php } ?>
                    </strong>
                </small><br>
                <small><i class="bi bi-person-fill"></i> Event created by:
                    <strong><?= $creatorResult["username"] ?></strong></small><br><br>
                <?php if($result["user_id"] == $_SESSION["id_user"]){ ?>
                <form method="post" action="assets/action/selected-event-action.php">
                    <input type="hidden" name="eventId" value="<?= $result["event_id"] ?>">
                    <input class="btn btn-outline-danger" type="submit" name="deleteEvent" value="Delete Current Event">
                </form>
                <?php if(date('F j, Y, g:i A') < $eventClose) { ?>
                <a href="modify-selected-event.php?id=<?= $result["event_id"] ?>"><input
                        class="btn btn-outline-primary mb-3" type="submit" name="modifyEvent" value="Modify Event"></a>
                <a href="invite-friends-to-event.php?id=<?= $result["event_id"] ?>"><input
                        class="btn btn-outline-primary mb-3" type="submit" name="inviteFriend"
                        value="Invite Friends"></a>
                <?php } ?>
                <a href="invited-people.php?id=<?= $result["event_id"] ?> "><input class="btn btn-outline-primary mb-3"
                        type="submit" name="checkInvitedPeople" value="Invited people"></a>
                <a href="wishlist.php?id=<?= $result["event_id"] ?>"><input class="btn btn-outline-primary mb-3"
                        type="submit" name="wishlistBtn" value="Wishlist"></a>
                <?php 
                } else {
                    if(isAuthenticated()){
                        if ($joinedEventQuery->rowCount() == 0) {
                            if(date('F j, Y, g:i A') < $eventClose) {
                ?>
                <a
                    href="assets/action/want-to-join-action.php?id=<?= $result["event_id"] ?>&email=<?= $_SESSION["user_email"] ?>"><input
                        class="btn btn-outline-primary mb-3" type="submit" name="wantToJoin" value="Join party"></a>
                <?php   }
                    } 
                    else { if(date('F j, Y, g:i A') < $eventClose) { ?>
                <a
                    href="assets/action/unjoin-action.php?id=<?= $result["event_id"] ?>&email=<?= $_SESSION["user_email"] ?>"><input
                        class="btn btn-outline-danger mb-3" type="submit" name="unJoin" value="Quit party"></a>
                <a href="wishlist.php?id=<?= $result["event_id"] ?>"><input class="btn btn-outline-primary mb-3"
                        type="submit" name="wishlistBtn" value="Wishlist"></a>
                <?php
                    }
                 } ?>
                <a href="invited-people.php?id=<?= $result["event_id"] ?> "><input class="btn btn-outline-primary mb-3"
                        type="submit" name="checkInvitedPeople" value="Invited people"></a>
                <?php
                    } else { ?>
                <a href="login.php"><button type="button" class="btn btn-primary me-2">Login to join</button></a>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>
</div>