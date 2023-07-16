<?php
require_once('assets/config/db_config.php');
require_once('assets/config/config.php');
require_once('assets/config/functions.php');
global $dsn, $pdoOptions;
$pdo = connectDatabase($dsn, $pdoOptions);

$selectMyEventsSql = "SELECT * FROM events WHERE user_id = :id ORDER BY date_time DESC";
$query = $pdo->prepare($selectMyEventsSql);
$query->bindParam(':id', $_SESSION["id_user"], PDO::PARAM_INT);
$query->execute();
$MyEventsResult = $query->fetchAll(PDO::FETCH_ASSOC);

$status = "joined";
$selectInvitationsSql = "SELECT DISTINCT * FROM invitations, events WHERE invitations.invited_user_email = :email AND invitations.event_id = events.event_id AND invitations.status != :status";
$selectInvitationsQuery = $pdo->prepare($selectInvitationsSql);
$selectInvitationsQuery->bindParam(':email', $_SESSION["user_email"], PDO::PARAM_STR);
$selectInvitationsQuery->bindParam(':status', $status, PDO::PARAM_STR);
$selectInvitationsQuery->execute();
$InvitationsResult = $selectInvitationsQuery->fetchAll(PDO::FETCH_ASSOC);

if($_SESSION["id_user"] == null){
    $_SESSION["id_user"] = 0;
}

$statusOfEvent = "public";
$activeEvent = "active";
$selectPublicEventsSql = "SELECT * FROM events WHERE event_status = :event_status AND user_id != :id AND event_active = :active";
$selectPublicEventQuery = $pdo->prepare($selectPublicEventsSql);
$selectPublicEventQuery->bindParam(':event_status', $statusOfEvent, PDO::PARAM_STR);
$selectPublicEventQuery->bindParam(':id', $_SESSION["id_user"], PDO::PARAM_INT);
$selectPublicEventQuery->bindParam(':active', $activeEvent, PDO::PARAM_STR);
$selectPublicEventQuery->execute();
$publicEventResults = $selectPublicEventQuery->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="container ">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-dark">Home</a></li>
            <li class=" breadcrumb-item active" aria-current="page"><?php echo $titles[$page] ?></li>
        </ol>
    </nav>
    <?php if(isAuthenticated()) { ?>
    <a href="create-events.php" class="small font-italic createTexts">Create new event</a>
    <?php } ?>
    <div class="px-3 pt-3 my-3 text-start">
        <?php
        if (isset($_GET['m']) and array_key_exists($_GET['m'], $messages[$page])) {
            echo '<div class="alert alert-' . $messages[$page][$_GET['m']]['style'] . ' alert-dismissible fade show" role="alert" id="message">' . $messages[$page][$_GET['m']]['text'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    ?>
        <h5 class="display-9">Public events <span
                class="badge bg-danger rounded-pill"><?php echo $selectPublicEventQuery->rowCount() ?></span></h5>
        <hr class="hr">
        <?php 
        if ($selectPublicEventQuery->rowCount() > 0){
            foreach($publicEventResults as $publicEventResult){
               if($publicEventResult["user_id"] != $_SESSION["id_user"]){
        ?>
        <div class="list-group my-3 px-5">
            <a href="selected-event.php?id=<?= $publicEventResult["event_id"] ?>"
                class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?= $publicEventResult["event_name"] ?></h5>
                </div>
                <p class="mb-1"><?= $publicEventResult["event_type"] ?></p>
                <small><?= $publicEventResult["event_location"] ?>, <?= $publicEventResult["event_street"] ?></small>
            </a>
        </div>
        <?php
                }
            }
        }
        else { ?>
        <div class="list-group my-3 px-5">
            <div class="d-flex w-100 justify-content-center">
                <h5 class="mb-1 text-center">There is no public events yet!</h5>
            </div>
        </div>
        <?php  
        }
    ?>
    </div>


    <?php if(isAuthenticated()) { ?>
    <div class="px-3 pt-3 my-3 text-start">
        <h5 class="display-9">My events <span
                class="badge bg-danger rounded-pill"><?php echo $query->rowCount() ?></span></h5>
        <hr class="hr">
        <?php 
            if ($query->rowCount() > 0){
                foreach($MyEventsResult as $result){
                    if($result["event_active"] == "active") {
        ?>
        <div class="list-group my-3 px-5">
            <a href="selected-event.php?id=<?= $result["event_id"] ?>" class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 flex-row-reverse">
                    <span class="badge rounded-pill bg-success"><?= $result["event_active"] ?></span>
                </div>
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?= $result["event_name"] ?></h5>
                </div>
                <p class="mb-1"><?= $result["event_type"] ?></p>
                <small><?= $result["event_location"] ?>, <?= $result["event_street"] ?></small>
            </a>
        </div>
        <?php
                    }
                    else { ?>
        <div class="list-group my-3 px-5">
            <a class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 flex-row-reverse">
                    <span class="badge rounded-pill bg-secondary"><?= $result["event_active"] ?></span>
                </div>
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?= $result["event_name"] ?></h5>
                </div>
                <p class="mb-1"><?= $result["event_type"] ?></p>
                <small><?= $result["event_location"] ?>, <?= $result["event_street"] ?></small>
            </a>
        </div>
        <?php
                    }
                }
            }
            else { ?>
        <div class="list-group my-3 px-5">
            <div class="d-flex w-100 justify-content-center">
                <h5 class="mb-1 text-center">You have no events yet!</h5>
            </div>
        </div>
        <?php  
            }
    ?>
    </div>



    <div class="px-3 pt-3 my-3 text-start">
        <h5 class="display-9">Invited events <span class="badge bg-danger rounded-pill"><?php echo $selectInvitationsQuery->rowCount() ?></span></h5>
        <hr class="hr">
        <?php 
            if ($selectInvitationsQuery->rowCount() > 0){
                foreach($InvitationsResult as $invitationResult){
        ?>
        <div class="list-group my-3 px-5">
            <a href="selected-invited-event.php?id=<?= $invitationResult["event_id"] ?>" class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 flex-row-reverse">
                    <span class="badge rounded-pill bg-dark"><?= $invitationResult["status"] ?></span>
                </div>
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?= $invitationResult["event_name"] ?></h5>
                </div>
                <p class="mb-1"><?= $invitationResult["event_type"] ?></p>
                <small><?= $invitationResult["event_location"] ?>, <?= $invitationResult["event_street"] ?></small>
            </a>
        </div>
        <?php
            }
        }
        else { ?>
        <div class="list-group my-3 px-5">
            <div class="d-flex w-100 justify-content-center">
                <h5 class="mb-1 text-center">You have no invitations yet!</h5>
            </div>
        </div>
        <?php  
        }
    }
    else {
    ?>
        <br>
        <div class="list-group my-3 px-5">
            <div class="d-flex w-100 justify-content-center">
                <h5 class="mb-1 text-center">Please <a href="login.php"><button type="button"
                            class="btn btn-success me-2">Login</button></a> to create your own events!</h5>
            </div>
        </div>
        <?php
    }
    ?>
    </div>
</div>