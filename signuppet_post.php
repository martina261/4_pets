<?php


include('include/connections.php');
if (isset($_POST['submit'])) {
    $namee = stripcslashes(strtolower($_POST['namee']));
    $typee = stripcslashes($_POST['typee']);
    $breed = stripcslashes($_POST['breed']);
    $age = stripcslashes($_POST['age']);
    $gender = stripcslashes($_POST['gender']);
    $info = stripcslashes($_POST['info']);



    $namee = htmlentities(mysqli_real_escape_string($conn, $_POST['namee']));
    $typee = htmlentities(mysqli_real_escape_string($conn, $_POST['typee']));
    $breed = htmlentities(mysqli_real_escape_string($conn, $_POST['breed']));
    $age = htmlentities(mysqli_real_escape_string($conn, $_POST['age']));
    $info = htmlentities(mysqli_real_escape_string($conn, $_POST['info']));
    $gender = htmlentities(mysqli_real_escape_string($conn, $_POST['gender']));
   
        $sql = "INSERT INTO pet(namee,typee,breed,age,gender,info) VALUES ('$namee','$typee','$breed','$age','$gender','$info')";
        mysqli_query($conn, $sql);
        header('location:login.php');
    
}
