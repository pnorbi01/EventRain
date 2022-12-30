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

$sql = "SELECT * FROM invitations, users WHERE invitations.event_id = :id AND invitations.invited_user_email = users.email";
$query = $pdo->prepare($sql);
$query->bindParam(':id', $eventId, PDO::PARAM_INT);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);

$number = 1;
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
    <table class="table table-hover table-light">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Profile picture</th>
                <th scope="col">First and lastname</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($results as $result){
        ?>
            <tr>
                <th scope="row"><?= $number ?></th>
                <td><img src="assets/images/profile-pictures/<?= $result["image"] ?>" alt="Profile Picture" width="32"
                        height="32" class="rounded-circle"></td>
                <td><?= $result["lastname"] ." ". $result["firstname"] ?></td>
                <td><?= $result["status"] ?></td>
            </tr>
            <?php 
                $number++;
                }
            } else { ?>
            <div class="list-group my-3 px-5">
                <div class="d-flex w-100 justify-content-center">
                    <h5 class="mb-2 text-center">Noone is invited to this event yet!</h5>
                </div>
            </div>
            <?php } ?>
        </tbody>
    </table>
</div>