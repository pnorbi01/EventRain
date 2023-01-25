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

if(!isValidEvent($eventId)){
    redirection("index.php");
}

if(isClosed($eventId)){
    redirection("index.php");
}

$inviteFriendToEventSql = "SELECT * FROM events WHERE event_id = :id";
$query = $pdo->prepare($inviteFriendToEventSql);
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
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-center" style="color: cornflowerblue;">Invite your
                        friend to the party</h1>
                    <?php
                            if (isset($_GET['m']) and array_key_exists($_GET['m'], $messages[$page])) {
                                echo '<div class="alert alert-' . $messages[$page][$_GET['m']]['style'] . ' alert-dismissible fade show" role="alert" id="message">' . $messages[$page][$_GET['m']]['text'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            }
                        ?>
                    <div class="alert alert-danger" role="alert" style="display: none"></div>
                    <form method="post" name="inviteFriendForm" onsubmit="return validateForm()"
                        action="assets/action/invite-friends-to-event-action.php">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="eventType" id="eventType"
                                placeholder="name@example.com" autofocus disabled>
                            <label for="eventType" class="form-label">Selected event:
                                <?= $result["event_name"] ?></label>
                        </div>
                        <div class="form-floating mb-3 required">
                            <input type="email" class="form-control" name="firendEmail" id="firendEmail"
                                placeholder="name@example.com" autofocus>
                            <label for="firendEmail" class="form-label">Type your friend's email here</label>
                        </div>
                        <div class="pt-4 mb-5 pb-1">
                            <input type="hidden" name="eventId" value="<?= $result["event_id"] ?>">
                            <input type="submit" name="inviteFriendBtn" class="btn btn-primary btn-lg btn-block w-100"
                                value="Invite him/her to the party">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
function validateForm() {
    let form = document.forms["inviteFriendForm"];
    let email = form["firendEmail"].value;
    var mailformat =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!validateEmail(email)) {
        $('.alert').css("display", "block");
        $('.alert').html("The entered email is not valid!");
        return false;
    }
    if (email.length <= 0) {
        $('.alert').css("display", "block");
        $('.alert').html("Email must be filled out");
        return false;
    }
    return true;
}

const validateEmail = (email) => {
  return String(email)
    .toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};
</script>