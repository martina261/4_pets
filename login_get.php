<?php

session_start();
include( 'include/connections.php' );
include( 'include/functions.php' );
/*
if ( isset( $_POST[ 'username' ] ) && isset( $_POST[ 'password' ] ) ) {
    $username = stripcslashes( strtolower( $_POST[ 'username' ] ) );
    $md5_pass = md5( $_POST[ 'password' ] );
    $username = filter_input( INPUT_POST, 'username' );
    $password = stripcslashes( strtolower( $_POST[ 'password' ] ) );

    $username = htmlentities( mysqli_real_escape_string( $conn, $_POST[ 'username' ] ) );
    $password = htmlentities( mysqli_real_escape_string( $conn, $_POST[ 'password' ] ) );

    $sql = "SELECT id,username FROM `user` WHERE username='$username' AND md5_pass='$md5_pass'";
    $result = mysqli_query( $conn, $sql );
    $row = mysqli_fetch_assoc( $result );
    $count = mysqli_num_rows( $result );
    if ( ( $row['username'] === $username ) && ( $row[ 'password' ] === $password ) ) {
        $_SESSION[ 'username' ] = $row[ 'username' ];
        $_SESSION[ 'id' ] = $row[ 'id' ];
        header( 'Location:landing.php' );
        exit();
    } else {
        $user_error = '<div class="alert alert-danger text-center">wrong Username or password.</div>';
        include( 'login.php' );
    }
}*/
$msg='';
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql = "SELECT id,username FROM `user` WHERE username='$username' AND password='$password'";
    $result = mysqli_query( $conn, $sql );
    //$row = mysqli_fetch_array( $result );
    $count=mysqli_num_rows($result);
    if($count>0){
        //header("location:userlanding.php");

        $row=mysqli_fetch_assoc($result);
		if($row['status']=='0'){
			$msg="Account deactivated";	
		}else{
			$_SESSION['ADMIN_LOGIN']='yes';
			$_SESSION['ADMIN_ID']=$row['id'];
			$_SESSION['ADMIN_USERNAME']=$username;
			$_SESSION['ADMIN_ROLE']=$row['role'];
			header('location:doctorprofile.php');
			die();
		}


    }
    else{
        $user_error = '<div class="alert alert-danger text-center">wrong Username or password.</div>';
        include( 'login.php' );
    }

}
?>


