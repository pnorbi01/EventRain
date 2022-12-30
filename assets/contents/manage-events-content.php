<script src="assets/js/script.js"></script>
<div class="container-xl px-4 mt-4">
    <nav class="nav nav-borders">
        <a class="nav-link activeAdminPanelNav" href="manage-users.php">Manage Users</a>
        <a class="nav-link activeAdminPanelNav" href="manage-events.php">Manage Events</a>
    </nav>
    <hr class="mt-0 mb-4">
</div>
<div class="container ">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-dark"">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $titles[$page] ?></li>
        </ol>
    </nav>

    <table id="manageEvents" class="table table-hover display" style="width:100%">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Status</th>
            <th>Location</th>
            <th>Street</th>
            <th>Start</th>
            <th>Active</th>
            <th>Options</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Status</th>
            <th>Location</th>
            <th>Street</th>
            <th>Start</th>
            <th>Active</th>
            <th>Options</th>
        </tr>
        </tfoot>
    </table><br>
    
    <?php
    if (isset($_GET['m']) and array_key_exists($_GET['m'], $messages[$page])) {
        echo '<div class="alert alert-' . $messages[$page][$_GET['m']]['style'] . ' alert-dismissible fade show" role="alert" id="message">' . $messages[$page][$_GET['m']]['text'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
    ?>
</div>

