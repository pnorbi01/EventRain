<?php
require_once('assets/config/db_config.php');
require_once('assets/config/config.php');
require_once('assets/config/functions.php');
global $dsn, $pdoOptions;
$pdo = connectDatabase($dsn, $pdoOptions);

if(isset($_GET["id"]) && !empty($_GET["id"]) && isset($_GET["status"]) && !empty($_GET["status"])){
    $eventId = $_GET["id"];
    $myStatus = trim($_GET["status"]);
}
else {
    redirection("index.php");
}

if(!isValidEvent($eventId)){
    redirection("index.php");
}

if(isClosed($eventId)){
    redirection("index.php");
}

$selectMyEventsSql = "SELECT * FROM events WHERE event_id = :id";
$query = $pdo->prepare($selectMyEventsSql);
$query->bindParam(':id', $eventId, PDO::PARAM_INT);
$query->execute();
$MyEventsResult = $query->fetch();

?>
<div class="container ">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="events.php" class="link-dark">Events</a></li>
            <li class=" breadcrumb-item active" aria-current="page"><?php echo $titles[$page] ?></li>
        </ol>
    </nav>
    <div class="list-group my-3 px-5">
        <div class="d-flex w-100 justify-content-center">
            <h2 class="mb-2 text-center">Let the organizer know if you are coming or not by changing your status.</span>
            </h2>
        </div>
        <section class="vh-10">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <?php
                        if (isset($_GET['m']) and array_key_exists($_GET['m'], $messages[$page])) {
                            echo '<div class="alert alert-' . $messages[$page][$_GET['m']]['style'] . ' alert-dismissible fade show" role="alert" id="message">' . $messages[$page][$_GET['m']]['text'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }
                    ?>
                        <form method="post" action="assets/action/change-my-status-action.php">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="eventType" id="eventType"
                                    placeholder="name@example.com" autofocus disabled>
                                <label for="eventType" class="form-label">Selected event:
                                    <?= $MyEventsResult["event_name"] ?></label>
                            </div>
                            <label for="eventStatus" class="form-label">Choose your status</label>

                            <?php if($myStatus == "accepted") { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="myEventStatus" id="accepted"
                                    value="accepted" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Accept
                                </label>
                            </div>
                            <?php } else { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="myEventStatus" id="accepted"
                                    value="accepted">
                                <label class="form-check-label" for="exampleRadios1">
                                    Accept
                                </label>
                            </div>
                            <?php } ?>


                            <?php if($myStatus == "declined") { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="myEventStatus" id="declined"
                                    value="declined" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Decline
                                </label>
                            </div>
                            <?php } else { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="myEventStatus" id="declined"
                                    value="declined">
                                <label class="form-check-label" for="exampleRadios1">
                                    Decline
                                </label>
                            </div>
                            <?php } ?>

                            <div class="pt-4 mb-5 pb-1">
                                <input type="hidden" value="<?= $eventId ?>" name="eventsId">
                                <input type="submit" class="btn btn-primary btn-lg btn-block w-100" name="changeMyStatus" value="Change my status">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>