<?php require 'db.php';

$title = "SIGN UP";
require './header.php';

if (isset($_POST['btnsignup'])) {
  require './file_handing.php';
  $name = request('name');
  $email = request('email');
  $password = request('password');
  $cpassword = request('cpassword');
  $dob = request('dob');
  $address = request('address');
  $citizenship_number = request('citizenship_number');
  $license_number = request('license_number');
  $personal_image = $file_name;

  require './validations.php';
  $password = password_hash($password, PASSWORD_DEFAULT);
  create(
    'users',
    compact('name', 'email', 'password', 'dob', 'address', 'citizenship_number', 'license_number', 'personal_image')
    /*
  [
    'name' => $name,
    'email' => $email,
    'password' => $password,
    'dob' => $dob,
    'address' => $address,
    'citizenship_number' => $citizenship_number,
    'license_number' => $license_number,
    'personal_image' => $personal_image
  ]*/
  );

  echo "<script>
alert('Succesfully Signup, Go to Login page to login');
</script>";
} 



?>



<div class="d-flex justify-content-center my-5">
  <form class="w-50 signup" id="signupform" action="signup.php" method="POST" enctype="multipart/form-data">
    <fieldset class="justify-content-md-center border-1 shadow rounded p-3 bg-light">
      <legend class="bg-dark text-light text-center font-weight-bold rounded p-3">
        <b> SIGN UP</b>
      </legend>
      <div class="container">
        <!-- Name Part -->
        <div class="row">

          <div class="col">
            <label for="name">Enter Your Name</label>
            <input type="text" name="name" id="name" placeholder="name" class="form-control">
          </div>
          <div class="col">
            <label for="email">Enter Your email</label>
            <input type="email" name="email" id="Cpassword" class="form-control" placeholder="email">
          </div>
        </div>

        <!-- pwd Part -->
        <div class="row">

          <div class="col">
            <label for="password">Enter Your Password</label>
            <input type="password" name="password" id="password" placeholder="Password" class="form-control">
          </div>
          <div class="col">
            <label for="Cpassword">Confirm Your Password</label>
            <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirm Password">
          </div>
        </div>
        <!-- Age and address -->
        <div class="row">
          <div class="col">
            <label for="dob">Enter Your Date of Birth </label>
            <input type="date" name="dob" id="dob" class="form-control date">
          </div>
          <div class="col">
            <label for="address">Enter Your Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="address">
          </div>
        </div>
        <!-- Other Information -->
        <div class="row">
          <div class="col">
            <label for="citizenship">Enter Your Citizenship Number </label>
            <input type="text" name="citizenship_number" id="citizenship" class="form-control" placeholder=" Citizenship Number">
          </div>
          <div class="col">
            <label for="licensenumber">Enter Your License Number</label>
            <input type="number" name="license_number" class="form-control" id="licensenumber" placeholder=" License Number">
          </div>
        </div>
        <!-- Upload photos -->
        <div class="row d-flex">

          <div class="col">
            <label for="personal_image">Upload Your Photo</label>
            <input type="file" name="personal_image" class="form-control" id="personal_image">
          </div>
        </div>

        <!-- Sign up button -->
        <div class="button d-flex justify-content-center">
          <input type="submit" value="SIGN UP" name="btnsignup" class="btn btn-dark hover my-2" />
        </div>
        <div class="login d-flex text-center">
          <p>Already have an account ? <a href="./signin.php" id="signin">Sign in</a></p>
        </div>
      </div>
    </fieldset>
  </form>
</div>

<?php require "./footer.php"; ?>