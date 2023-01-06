<?php
require_once('assets/config/db_config.php');
require_once('assets/config/config.php');
require_once('assets/config/functions.php');

global $dsn, $pdoOptions;
$pdo = connectDatabase($dsn, $pdoOptions);

$sql = "SELECT * FROM gifts, events, users WHERE gifts.user_id = :user_id AND gifts.event_id = events.event_id AND events.user_id = users.user_id";
$query = $pdo->prepare($sql);
$query->bindParam(':user_id', $_SESSION["id_user"], PDO::PARAM_INT);
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
    <?php
        if ($query->rowCount() > 0){
            foreach($results as $result){
                $eventClose = date('Y-m-d h:i', strtotime($result["event_close"]));
    ?>
        <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title"><?= $result["name"] ?></h3>
                <p class="card-text text-start">
                    <small>Event - <strong><?= $result["event_name"] ?></strong></small><br>
                    <small>Organizer - <strong><?= $result["lastname"]." ".$result["firstname"] ?></strong></small><br>
                </p>
                <span class="text-center">If you want to exchange your gift please find this event's profile before it closes!</span><br><br>
                <?php if(date('Y-m-d h:i') < $eventClose) { ?>
                    <span class="text-center" style="color:#228B22;"><strong>Event is OPEN</strong></span>
                <?php } else { ?>
                    <span class="text-center" style="color:#f00;"><strong>Event is CLOSED</strong></span>
                <?php } ?>
            </div>
        </div>
        <?php 
            }
        }
        ?>
    </div>
</div>