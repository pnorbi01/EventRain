<?php
require_once('assets/config/db_config.php');
require_once('assets/config/config.php');
require_once('assets/config/functions.php');
global $dsn, $pdoOptions;
$pdo = connectDatabase($dsn, $pdoOptions);

if(isset($_GET["id"]) && !empty($_GET["id"])){
    $eventId = (int)$_GET["id"];
}
else {
    redirection("index.php");
}

$organizerSql = "SELECT * FROM invitations, events WHERE invitations.event_id = events.event_id AND invitations.event_id = :event_id";
$organizerQuery = $pdo->prepare($organizerSql);
$organizerQuery->bindParam(':event_id', $eventId, PDO::PARAM_INT);
$organizerQuery->execute();
$organizerResult = $organizerQuery->fetch();


$sql = "SELECT * FROM invitations, users WHERE invitations.event_id = :id AND invitations.invited_user_email = users.email";
$query = $pdo->prepare($sql);
$query->bindParam(':id', $eventId, PDO::PARAM_INT);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);

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
            <h3 class="mb-2 text-center">People who are invited to this event</h3>
        </div>
    </div>
    <?php if ($query->rowCount() > 0){ ?>
    <input class="form-control mr-sm-2" id="searchInput" onkeyup="searchFunction()" type="search" placeholder="Search" aria-label="Search">
    <div class="divTable">
        <table class="table table-hover text-center" id="invitedPeopleTable">
            <thead>
                <tr>
                    <th scope="col">User</th>
                    <th scope="col">Status</th>
                    <?php if($organizerResult["user_id"] == $_SESSION["id_user"]) { ?>
                    <th scope="col">Option</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($results as $result){
        ?>
                <tr>
                    <td><img src="assets/images/profile-pictures/<?= $result["image"] ?>" alt="Profile Picture"
                            width="32" height="32" class="rounded-circle">
                        <span><?= $result["lastname"] ." ". $result["firstname"] ?></span></td>
                    <td><?= $result["status"] ?></td>
                    <?php if($organizerResult["user_id"] == $_SESSION["id_user"]) { ?>
                    <form method="post" action="assets/action/delete-invited-friend-action.php">
                        <input type="hidden" value="<?= $result["event_id"] ?>" name="eventId">
                        <input type="hidden" value="<?= $result["email"] ?>" name="deletedFriendEmail">
                        <input type="hidden" value="<?= $result["user_id"] ?>" name="userId">
                        <th scope="col"><input type="submit" class="btn btn-outline-danger" name="deleteInvitedFriend"
                                value="Remove"></th>
                    </form>
                    <?php } ?>
                </tr>
                <?php 
                }
            } else { ?>
                <div class="list-group my-3 px-5">
                    <div class="d-flex w-100 justify-content-center">
                        <h5 class="mb-2 text-center">No one is invited to this event yet!</h5>
                    </div>
                </div>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="divTable">
    <?php
        if (isset($_GET['m']) and array_key_exists($_GET['m'], $messages[$page])) {
            echo '<div class="alert alert-' . $messages[$page][$_GET['m']]['style'] . ' alert-dismissible fade show" role="alert" id="message">' . $messages[$page][$_GET['m']]['text'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    ?>
    </div>
</div>
<script type = "text/javascript" src="assets/js/script.js"></script> 