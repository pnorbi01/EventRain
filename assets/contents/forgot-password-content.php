<div class="container ">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php" class="link-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="login.php" class="link-dark">Login</a></li>
            <li class=" breadcrumb-item active" aria-current="page"><?php echo $titles[$page] ?></li>
        </ol>
    </nav>
    <section class="vh-80">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-center" style="color: cornflowerblue;">Forgot Password</h1>
                    <form method="post" id="login" action="./assets/config/web.php">
                        <div class="form-floating mb-3 required">
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" autofocus>
                            <label for="email" class="form-label">Email Address</label>
                        </div>
                        <div class="pt-4 mb-5 pb-1">
                            <input type="hidden" name="action" value="forget">
                            <input type="submit" class="btn btn-primary btn-lg btn-block w-100" value="Send the recovery email">
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