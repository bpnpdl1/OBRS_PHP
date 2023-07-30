<?php

if (empty($name) || empty($email) || empty($password) || empty($dob) || empty($cpassword) || empty($address) || empty($citizenship_number) || empty($license_number) || empty($personal_image)) {
    die("Please fill all the fields!");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Please provide an valid email!");
}

$user = where('users', 'email', '=', $email, false);

if ($user) {
    die("Email has already been taken!");
}

if ($password != $cpassword) {
    die("Password and Confirm Password do not match!");
}

if (strlen($password) < 8) {
    die("Password must be 8 characters or more!");
}
$presentdate = date('Y-m-d');
if ($presentdate < $dob) {
    die("Your date is Invalid");
}
$diff=((int)$presentdate-(int)$dob);
if($diff<18){
    die("Your age is under 18.");
}

