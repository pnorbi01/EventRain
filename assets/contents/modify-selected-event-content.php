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

if(isClosed($eventId)){
    redirection("index.php");
}

$modifySelectedEventSql = "SELECT * FROM events WHERE event_id = :id";
$query = $pdo->prepare($modifySelectedEventSql);
$query->bindParam(':id', $eventId, PDO::PARAM_INT);
$query->execute();

if ($query->rowCount() == 1) {
    $result = $query->fetch();
}

?>
<div class="container ">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="events.php" class="link-dark">Events</a></li>
            <li class=" breadcrumb-item active" aria-current="page"><?php echo $titles[$page] ?></li>
        </ol>
    </nav>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-center" style="color: cornflowerblue;">Modify
                        <i><?= $result["event_name"] ?></i> Event</h1>
                    <?php
                            if (isset($_GET['m']) and array_key_exists($_GET['m'], $messages[$page])) {
                                echo '<div class="alert alert-' . $messages[$page][$_GET['m']]['style'] . ' alert-dismissible fade show" role="alert" id="message">' . $messages[$page][$_GET['m']]['text'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            }
                        ?>
                    <div class="alert alert-danger" role="alert" style="display: none"></div>
                    <form method="post" name="modifyEventForm" onsubmit="return validateForm()" action="assets/action/modify-selected-event-action.php">
                        <div class="form-floating mb-3 required">
                            <input type="text" class="form-control" name="eventType" id="eventType"
                                placeholder="name@example.com" autofocus value="<?= $result["event_type"] ?>">
                            <label for="eventType" class="form-label">Type</label>
                        </div>
                        <label for="eventStatus" class="form-label">Choose the status of event</label>
                        <?php if($result["event_status"] == "public") { ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="eventStatus" id="public" value="public" checked>
                            <label class="form-check-label" for="exampleRadios1">Public</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="eventStatus" id="private" value="private">
                            <label class="form-check-label" for="exampleRadios1">Private</label>
                        </div> <?php } else { ?><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="eventStatus" id="public" value="public">
                            <label class="form-check-label" for="exampleRadios1">Public</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="eventStatus" id="private" value="private" checked>
                            <label class="form-check-label" for="exampleRadios1">Private</label>
                        </div>
                        <?php } ?>
                        <div class="form-floating mb-3 required">
                            <input type="text" class="form-control" name="eventName" id="eventName" placeholder="name@example.com" value="<?= $result["event_name"] ?>">
                            <label for="eventName" class="form-label">Event's Name</label>
                        </div>
                        <div class="form-floating mb-3 required">
                            <input type="text" class="form-control" name="eventLocation" id="eventLocation" placeholder="name@example.com" value="<?= $result["event_location"] ?>">
                            <label for="eventLocation" class="form-label">Event's Location</label>
                        </div>
                        <div class="form-floating mb-3 required">
                            <input type="text" class="form-control" name="eventStreet" id="eventStreet" placeholder="name@example.com" value="<?= $result["event_street"] ?>">
                            <label for="eventStreet" class="form-label">Event's Street</label>
                        </div>
                        <div class="pt-4 mb-5 pb-1">
                            <input type="hidden" name="eventToModify" value="<?= $result["event_id"] ?>">
                            <input type="submit" name="modifyEventBtn" class="btn btn-primary btn-lg btn-block w-100" value="Modify this event">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
function validateForm() {
  let form = document.forms["modifyEventForm"];
  let type = form["eventType"].value;
  let name = form["eventName"].value;
  let location = form["eventLocation"].value;
  let street = form["eventStreet"].value;
  if (type.length <= 0) {
    $('.alert').css("display", "block");
    $('.alert').html("Type must be filled out!");
    document.getElementsByClassName('breadcrumb')[0].scrollIntoView();
    return false;
  }
  if (name.length <= 0) {
    $('.alert').css("display", "block");
    $('.alert').html("Name must be filled out!");
    document.getElementsByClassName('breadcrumb')[0].scrollIntoView();
    return false;
  }
  if (location.length <= 0) {
    $('.alert').css("display", "block");
    $('.alert').html("Location must be filled out!");
    document.getElementsByClassName('breadcrumb')[0].scrollIntoView();
    return false;
  }
  if (street.length <= 0) {
    $('.alert').css("display", "block");
    $('.alert').html("Street must be filled out!");
    document.getElementsByClassName('breadcrumb')[0].scrollIntoView();
    return false;
  }
  return true;
}
</script>