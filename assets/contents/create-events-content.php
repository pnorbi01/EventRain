<?php
$mindate = date("Y-m-d");
$mintime = date("h:i");
$min = $mindate."T".$mintime;
$maxdate = date("Y-m-d", strtotime("+2 years"));
$maxtime = date("h:i");
$max = $maxdate."T".$maxtime;
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
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-center" style="color: cornflowerblue;">Create your own
                        event</h1>
                        <?php
                            if (isset($_GET['m']) and array_key_exists($_GET['m'], $messages[$page])) {
                                echo '<div class="alert alert-' . $messages[$page][$_GET['m']]['style'] . ' alert-dismissible fade show" role="alert" id="message">' . $messages[$page][$_GET['m']]['text'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            }
                        ?>
                    <form method="post" action="assets/action/create-events-action.php">
                        <div class="form-floating mb-3 required">
                            <input type="text" class="form-control" name="eventType" id="eventType"
                                placeholder="name@example.com" autofocus>
                            <label for="eventType" class="form-label">Type</label>
                        </div>
                        <label for="eventStatus" class="form-label">Choose the status of event</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="eventStatus" id="public"
                                value="public" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Public
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="eventStatus" id="private"
                                value="private" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Private
                            </label>
                        </div><br>
                        <div class="form-floating mb-3 required">
                            <input type="text" class="form-control" name="eventName" id="eventName"
                                placeholder="name@example.com">
                            <label for="eventName" class="form-label">Event's Name</label>
                        </div>
                        <div class="form-floating mb-3 required">
                            <input type="text" class="form-control" name="eventLocation" id="eventLocation"
                                placeholder="name@example.com">
                            <label for="eventLocation" class="form-label">Event's Location</label>
                        </div>
                        <div class="form-floating mb-3 required">
                            <input type="text" class="form-control" name="eventStreet" id="eventStreet"
                                placeholder="name@example.com">
                            <label for="eventStreet" class="form-label">Event's Street</label>
                        </div>
                        <div class="col-md-6">
                            <label for="eventStart">Pick the start of your event</label><br>
                            <input type="datetime-local" id="eventStart" class="form-control" value="<?php echo $min ?>" name="eventStart" min="<?php echo $min ?>" max="<?php echo $max ?>">
                        </div>
                        <div class="pt-4 mb-5 pb-1">
                            <input type="submit" name="createEventBtn" class="btn btn-primary btn-lg btn-block w-100" value="Create event">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>