<div class="container ">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php" class="link-dark">Home</a></li>
            <li class=" breadcrumb-item active" aria-current="page"><?php echo $titles[$page] ?></li>
        </ol>
    </nav>
    <section class="vh-80">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-center" style="color: cornflowerblue;">Setting Up New Password</h1>
                    <form method="post" action="assets/action/setting-new-password-action.php">
                    <div class="form-floating mb-3 required">
                        <input type="password" class="form-control" name="firstPassword" id="firstPassword" placeholder="name@example.com" autofocus>
                        <label for="firstPassword" class="form-label">Password</label>
                    </div>
                    <div class="form-floating mb-3 required">
                        <input type="password" class="form-control" name="secondPassword" id="secondPassword" placeholder="name@example.com">
                        <label for="secondPassword" class="form-label">Verify Password</label>
                    </div>
                        <div class="pt-4 mb-5 pb-1">
                            <input type="text" name="token" hidden value="<?= $token ?>" />
                            <input type="text" name="userId" hidden value="<?= $userId ?>" />
                            <input type="submit" class="btn btn-primary btn-lg btn-block w-100" name="setNewPassword" value="Change my password">
                        </div>
                        <?php
                            if (isset($_GET['m']) and array_key_exists($_GET['m'], $messages[$page])) {
                                echo '<div class="alert alert-' . $messages[$page][$_GET['m']]['style'] . ' alert-dismissible fade show" role="alert" id="message">' . $messages[$page][$_GET['m']]['text'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>