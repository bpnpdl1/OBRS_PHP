<?php
$title = "SIGN IN";
require './header.php';
require 'db.php';

if (!empty($_POST)) {
    $email = request('email');
    $password = request('password');
    
    if (empty($email) || empty($password)) {
        die("Please fill both fields");
    }

    $user = where('users', 'email', '=', $email, false);
    // die($password);
    if (empty($user)) {
        die("No email is found");
    }
    if (password_verify($password, $user['password'])) {
        die("Login Successful");
    } else {
        die("Invalid password");
    }
}
?>


<div class="d-flex justify-content-center my-5">
    <form class="w-50 mb-5" method="post" action="">
        <fieldset class="justify-content-md-center border-1 shadow rounded p-3 bg-light">
            <legend class="bg-dark text-light text-center font-weight-bold rounded p-3">
                <b> SIGN IN</b>
            </legend>
            <div class="container">
                <!-- Email Part -->
                <div class="row">
                    <label for="email" class="form-label">Enter Your Email</label>
                    <div class="col"><input type="text" name="email" class="form-control" id="email" placeholder="Email "></div>
                </div>
                <!-- Password Part -->
                <div class="row">
                    <label for="password" class="form-label">Enter Your Password</label>
                    <div class="col"><input type="password" name="password" class="form-control" id="password" placeholder="Password"></div>
                </div><br>
                <!-- Sign up button -->
                <div class="button d-flex justify-content-center">
                    <input type="submit" value="SIGN IN" class="btn btn-dark hover form-control" />
                </div>
                <div class="login d-flex text-center">
                    <label class="form-label">Don't have an account ? <a href="./signup.php">Sign up</a></label>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<?php require 'footer.php'; ?>