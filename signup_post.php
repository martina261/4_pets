<?php
include('include/connections.php');



if (isset($_POST['submit'])) {
    $username = stripcslashes(strtolower($_POST['username']));
    $firstname = stripcslashes($_POST['firstname']);
    $lastname = stripcslashes($_POST['lastname']);
    $email = stripcslashes($_POST['email']);
    $phone = stripcslashes($_POST['phone']);
    $dateofbirth = stripcslashes($_POST['dateofbirth']);
    $password = stripcslashes($_POST['password']);
    $gender = stripcslashes($_POST['gender']);



    $username = htmlentities(mysqli_real_escape_string($conn, $_POST['username']));
    $firstname = htmlentities(mysqli_real_escape_string($conn, $_POST['firstname']));
    $lastname = htmlentities(mysqli_real_escape_string($conn, $_POST['lastname']));
    $email = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
    $phone = htmlentities(mysqli_real_escape_string($conn, $_POST['phone']));
    $dateofbirth = htmlentities(mysqli_real_escape_string($conn, $_POST['dateofbirth']));
    $gender = htmlentities(mysqli_real_escape_string($conn, $_POST['gender']));
    $md5_pass = md5($password);

    $error_s = 0;

    $check_user = "SELECT * FROM `user` where username  = '$username'";
    $check_result = mysqli_query($conn, $check_user);
    $num_rows = mysqli_num_rows($check_result);
    if ($num_rows != 0) {
        $user_error = '<div class="alert alert-danger text-center">Sorry, Username already exist.</div>';
        $error_s = 1;
    }

    $check_email = "SELECT * FROM `user` where email  = '$email'";
    $check_result = mysqli_query($conn, $check_email);
    $num_rows = mysqli_num_rows($check_result);

    if ($num_rows != 0) {
        $email_error = '<div class="alert alert-danger text-center">Sorry, Email already exist.</div>';
        $error_s = 1;
    }
    $check_phone = "SELECT * FROM `user` where phone  = '$phone'";
    $check_result = mysqli_query($conn, $check_phone);
    $num_rows = mysqli_num_rows($check_result);

    if ($num_rows != 0) {
        $phone_error = '<div class="alert alert-danger text-center">Sorry, Phone already exist.</div>';
        $error_s = 1;
    }

    if (($num_rows == 0) && ($error_s == 0)) {
        $sql = "INSERT INTO user(username,firstname,lastname,email,phone,dateofbirth,password,md5_pass,gender) VALUES ('$username','$firstname','$lastname','$email','$phone','$dateofbirth','$password','$md5_pass','$gender')";
        mysqli_query($conn, $sql);
        header('location:signuppet.php');
    } else {
        include('signup.php');
    }
}
