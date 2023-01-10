<div class="container ">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="link-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="login.php" class="link-dark">Login</a></li>
            <li class=" breadcrumb-item active" aria-current="page"><?php echo $titles[$page] ?></li>
        </ol>
    </nav>
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <h1 class="display-5 fw-bold lh-1 mb-3 text-center" style="color: cornflowerblue;">Sign-Up</h1>
                <?php
                    if (isset($_GET['m']) and array_key_exists($_GET['m'], $messages[$page])) {
                        echo '<div class="alert alert-' . $messages[$page][$_GET['m']]['style'] . ' alert-dismissible fade show" role="alert" id="message">' . $messages[$page][$_GET['m']]['text'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                    }
                ?>
                <div class="alert alert-danger" role="alert" style="display: none"></div>
                <form method="post" name="registerForm" onsubmit="return validateForm()" action="./assets/config/web.php">
                    <div class="form-floating mb-3 required">
                        <input type="text" class="form-control" name="username" id="username" placeholder="name@example.com" autofocus>
                        <label for="username" class="form-label">Username</label>
                    </div>
                    <div class="form-floating mb-3 required">
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="name@example.com">
                        <label for="firstname" class="form-label">First Name</label>
                    </div>
                    <div class="form-floating mb-3 required">
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="name@example.com">
                        <label for="lastname" class="form-label">Last Name</label>
                    </div>
                    <div class="form-floating mb-3 required">
                        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                        <label for="email" class="form-label">Email Address</label>
                    </div>
                    <div class="form-floating mb-3 required">
                        <input type="password" class="form-control" name="password" id="password" placeholder="name@example.com">
                        <label for="password" class="form-label">Password</label>
                    </div>
                    <div class="form-floating mb-3 required">
                        <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" placeholder="name@example.com">
                        <label for="passwordConfirm" class="form-label">Verify Password</label>
                    </div>
                    <div class="pt-4 mb-5 pb-1">
                        <input type="hidden" name="action" value="register">
                        <input type="submit" class="btn btn-primary btn-lg btn-block w-100" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</div>
<script>
function validateForm() {
  let form = document.forms["registerForm"];
  let username = form["username"].value;
  let firstname = form["firstname"].value;
  let lastname = form["lastname"].value;
  let email = form["email"].value;
  let password = form["password"].value;
  let passwordConfirm = form["passwordConfirm"].value;
  let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (username.length <= 0) {
    $('.alert').css("display", "block");
    $('.alert').html("Username must be filled out!");
    document.getElementsByClassName('breadcrumb')[0].scrollIntoView();
    return false;
  }
  if (firstname.length <= 0) {
    $('.alert').css("display", "block");
    $('.alert').html("Firstname must be filled out!");
    document.getElementsByClassName('breadcrumb')[0].scrollIntoView();
    return false;
  }
  if (lastname.length <= 0) {
    $('.alert').css("display", "block");
    $('.alert').html("Lastname must be filled out!");
    document.getElementsByClassName('breadcrumb')[0].scrollIntoView();
    return false;
  }
  if (!validateEmail(email)){
    $('.alert').css("display", "block");
    $('.alert').html("Invalid email address!");
    document.getElementsByClassName('breadcrumb')[0].scrollIntoView();
    return false;
  }
  if (password.length < 7) {
    $('.alert').css("display", "block");
    $('.alert').html("Password must contain 7 characters atleast!");
    document.getElementsByClassName('breadcrumb')[0].scrollIntoView();
    return false;
  }
  if (password != passwordConfirm) {
    $('.alert').css("display", "block");
    $('.alert').html("Passwords do not match!");
    document.getElementsByClassName('breadcrumb')[0].scrollIntoView();
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