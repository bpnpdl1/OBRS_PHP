<?php require 'db.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <?php require 'links.php'; ?>
</head>

<body>
    <!-- Header -->

    <div class="d-flex justify-content-center">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid d-flex justify-content-center">
      <a class="navbar-brand" href="index.php">
        <div>
         <h1>OBRS</h1>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="login.php">Signin</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-sm-2" type="text" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

</div>


    <div style="height: 72vh;" class="p-3">
        <!-- sign in -->
        <div class="d-flex justify-content-center align-items-center ">
            <form class="w-50" id="signinform">
                <fieldset class="justify-content-md-center border-1 shadow rounded p-3 bg-light">
                    <legend class="bg-dark text-light text-center font-weight-bold rounded p-3">
                        <b> SIGN IN</b>
                    </legend>
                    <div class="container">
                        <!-- Email Part -->
                        <div class="row">
                            <label for="email">Enter Your Email</label>
                            <div class="col"><input type="text" name="email" id="email" placeholder="Email "></div>
                        </div>
                        <!-- Password Part -->
                        <div class="row">
                            <label for="password">Enter Your Password</label>
                            <div class="col"><input type="password" name="password" id="password" placeholder="Password"></div>
                        </div><br>
                        <!-- Sign in button -->
                        <div class="button d-flex justify-content-center">
                            <input type="submit" value="SIGN IN" class="btn btn-dark hover" />
                        </div>
                        <div class="login d-flex text-center">
                            <p>Don't have an account ? <a href="#" onclick="displaysignform()">Sign up</a></p>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- sign up -->

        <div class="d-flex justify-content-center">
            <form class="w-75 signup" id="signupform" style="display: none;">
                <fieldset class="justify-content-md-center border-1 shadow rounded p-3 bg-light">
                    <legend class="bg-dark text-light text-center font-weight-bold rounded p-3">
                        <b> SIGN UP</b>
                    </legend>
                    <div class="container">
                        <!-- Name Part -->
                        <div class="row">
                            <label for="fname">Enter Your Name</label>
                            <div class="col"><input type="text" name="fname" id="fname" placeholder=" First Name"></div>
                            <div class="col"><input type="text" name="lname" id="lname" placeholder=" Last Name"></div>
                        </div>
                        <!-- Contact Part -->
                        <div class="row"><label for="email">Enter Your Contact</label>
                            <div class="col"><input type="text" placeholder=" Email" /></div>
                            <div class="col"><input type="number" placeholder=" Phone Number" /></div>
                        </div>
                        <!-- Password Part -->
                        <div class="row">
                            <label for="password">Enter Your Password</label>
                            <div class="col"><input type="password" name="password" id="password" placeholder="Password"></div>
                            <div class="col"><input type="password" name="Cpassword" id="Cpassword" placeholder="Confirm Password"></div>
                        </div>
                        <!-- Other Information -->
                        <div class="row"><label for="citizenship">Enter other infomations </label>
                            <div class="col"><input type="text" name="citizenship" id="citizenship" placeholder=" Citizenship"></div>
                            <div class="col"><input type="number" name="License-Number" id="licensenumber" placeholder=" License Number"></div>
                        </div><br>
                        <!-- Sign up button -->
                        <div class="button d-flex justify-content-center">
                            <input type="submit" value="SIGN UP" class="btn btn-dark hover" />
                        </div>
                        <div class="login d-flex text-center">
                            <p>Already have an account ? <a href="#" onclick="displaysignform()" id="signin">Sign in</a></p>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

    </div>


    <?php require 'footer.php'; ?>
    <script src="./js/custom.js"></script>
</body>

</html>