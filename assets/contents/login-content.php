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
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-center" style="color: cornflowerblue;">Log-In</h1>
                    <?php
                        if (isset($_GET['m']) and array_key_exists($_GET['m'], $messages[$page])) {
                            echo '<div class="alert alert-' . $messages[$page][$_GET['m']]['style'] . ' alert-dismissible fade show" role="alert" id="message">' . $messages[$page][$_GET['m']]['text'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }
                    ?>
                    <div class="alert alert-danger" role="alert" style="display: none"></div>
                    <form method="post" id="login" name="loginForm" action="./assets/config/web.php" onsubmit="return validateForm()">
                        <div class="form-floating mb-3 required">
                            <input type="text" class="form-control" name="username" id="floatingInput" placeholder="name@example.com" autofocus>
                            <label for="floatingInput" class="form-label">Username</label>
                        </div>
                        <div class="form-floating required">
                            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword" class="form-label">Password</label>
                        </div><br>
                        <a class="small font-italic text-muted mb-4 text-decoration-none" href="forgot-password.php">Forgot your
                            password?</a>
                        <div class="pt-4 mb-5 pb-1">
                            <input type="hidden" name="action" value="login">
                            <input type="submit" class="btn btn-primary btn-lg btn-block w-100" value="Login">
                        </div>
                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0 me-2">Do not have an Account?</p>
                            <a href="register.php"><button type="button" class="btn btn-outline-primary">Create
                                    one</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
function validateForm() {
  let form = document.forms["loginForm"];
  let username = form["username"].value;
  let password = form["password"].value;
  if (username.length <= 0) {
    $('.alert').css("display", "block");
    $('.alert').html("Username must be filled out");
    return false;
  }
  if (password.length <= 0) {
    $('.alert').css("display", "block");
    $('.alert').html("Password must be filled out");
    return false;
  }
  return true;
}
</script>