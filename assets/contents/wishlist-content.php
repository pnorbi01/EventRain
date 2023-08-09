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

if(isClosed($eventId) && !isOwner($eventId, $_SESSION["id_user"])){
    redirection("index.php");
}

if(!isOwner($eventId, $_SESSION["id_user"]) && !isGoing($eventId, $_SESSION["user_email"])){
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

$eventClose = strtotime($creatorResult["event_close"]);
$currentDateTime = time();

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

$selectCommentsSql = "SELECT * FROM comments, users WHERE comments.user_id = users.user_id AND comments.event_id = :id ORDER BY comments.post_time DESC";
$selectCommentsQuery = $pdo->prepare($selectCommentsSql);
$selectCommentsQuery->bindParam(':id', $eventId, PDO::PARAM_INT);
$selectCommentsQuery->execute();
$selectCommentsResult = $selectCommentsQuery->fetchAll(PDO::FETCH_ASSOC);

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
            <small class="text-muted">Note that you can only bring one gift!</small>
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
                    else { 
                            if($currentDateTime < $eventClose) { ?>
                <a href="assets/action/remove-gift-action.php?id=<?= $result["gift_id"] ?>&event_id=<?= $eventId ?>" class="btn btn-danger">Remove gift</a>
                <?php 
                            } else { ?>
                <input type="submit" value="Remove gift" disabled>
                    <?php
                            }
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
    <hr>
</div>
<div class="list-group my-3 px-5">
    <div class="d-flex w-100 justify-content-center">
        <h2 class="mb-2 text-center">Share your comment below</h2>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-md-8 col-lg-8">
        <div class="card shadow-0 border">
            <div class="card-body p-4">
                <form method="post" action="assets/action/comment-action.php">
                    <div class="form-outline mb-4">
                        <div class="form-outline w-100">
                            <textarea class="form-control" id="textAreaExample" name="comment" rows="4" style="background: #fff;" placeholder="Type your comment"></textarea>
                        </div><br>
                        <?php if($currentDateTime < $eventClose) { ?>
                            <input type="submit" name="postComment" value="Post comment" class="btn btn-outline-primary">
                        <?php 
                              } 
                              else { ?>
                                <input type="submit" name="postComment" value="Post comment" disabled class="btn btn-secondary">
                        <?php } ?>
                        <input type="hidden" name="eventComment" value="<?= $eventId ?>">
                        <input type="hidden" name="userComment" value="<?= $_SESSION["id_user"] ?>">
                    </div>
                </form>
                <h5>Recent comments by users <span class="badge bg-danger rounded-pill"><?php echo $selectCommentsQuery->rowCount() ?></span></h5><br>
                <?php 
                    if ($selectCommentsQuery->rowCount() > 0){
                        foreach($selectCommentsResult as $commentResult){
                ?>
                <div class="card">
                <?php
                if($creatorResult["user_id"] == $_SESSION["id_user"]) {
                ?>
                <a href="assets/action/delete-comment-action.php?commentId=<?= $commentResult["id"] ?>&id=<?= $eventId ?>"><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" title="Delete Comment" style="cursor: pointer;">-</span></a>
                <?php
                }
                ?> 
                    <div class="card-body">
                        <p><?= $commentResult["comment"] ?></p>

                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <img src="assets/images/profile-pictures/<?= $commentResult["image"] ?>" alt="profilePicture"
                                    width="25" height="25" class="rounded-circle" />
                                <p class="small mb-0 ms-2" style="color: #6495ED;"><?= $commentResult["username"] ?></p>
                                <?php
                                if($commentResult["user_id"] === $creatorResult["user_id"]) {
                                ?>
                                &nbsp;<i class="bi bi-gem" style="color: #FFD700;" title="Owner"></i>
                                <?php
                                }
                                if($commentResult["user_id"] === $_SESSION["id_user"]) {
                                ?>
                                <a href="assets/action/delete-comment-action.php?commentId=<?= $commentResult["id"] ?>&id=<?= $eventId ?>"><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" title="Delete Comment" style="cursor: pointer;">-</span></a>
                                <?php } ?>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex flex-row align-items-center">
                            <p class="small text-muted mb-0">Posted at <?php echo date("F j, Y", strtotime($commentResult["post_time"])); ?></p>
                        </div>
                    </div>
                </div><br>
                <?php 
                        }
                    } else {
                    ?>
                    <h6 class="text-center">There is no comments yet!</h6>
                    <?php 
                    }
                    ?>
            </div>
        </div>
    </div>
</div>