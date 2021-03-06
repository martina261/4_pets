<?php
session_start();
include('include/connections.php');
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    $id=$_SESSION['id'];
    $username=$_SESSION['username'];
    $firstname=$_SESSION['firstname'];
    $lastname=$_SESSION['lastname'];

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/userprofile.css">
    <link rel="icon" href="css/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <style>
        body {
            background-image: url("css/image.jpg");
        }
    </style>

</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <ul class="navbar-nav">
            <a class="nav-item" href="#">
                <img src="css/logo.png" width="60" height="60">
            </a>

            <div id="takeAction" class="collapse navbar-collapse">
                <li class="nav-item">
                    <a href="userlanding.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="bookAnAppointment.php" class="nav-link">Book Appointment</a>
                </li>
                <li class="nav-item">
                    <a href="contactUs.php" class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="aboutUs.php" class="nav-link">About Us</a>
                </li>
            </div>
        </ul>
        <a href="#takeAction" data-toggle="collapse" class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
        </a>
    </nav>
    <!--navbar-->
    <!--profile card-->
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card" id="c1">
                    <div class="card-body">
                        <div class="user-name">
                            <div class="profile-pic-div">
                                <img src="css/OIP.jpg" alt="" id="photo" style="width:140px;height:140px;">
                                <input type="file" name="" id="file">
                                <label for="file" id="uploadBtn">choose photo</label>
                            </div>
                        <h5 class="user-name">kokiiiii</h5>
                    </div>
                    <div class="about">
                        <h5>About</h5>
                        <p>his/her pet type or user</p>
                    </div>
                </div>
            </div>
        </div>
        <!--profile details-->
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card" id="c2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary"><i class="fa-solid fa-id-card"></i> Personal Details</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-info">
                                <label for="fullName">Full Name</label>
                                <p><?php echo $firstname ; echo $lastname?></p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-info">
                                <label for="eMail">Email</label>
                                <p>Enter email ID</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-info">
                                <label for="phone">Phone</label>
                                <p>Enter phone number</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <p>your address</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="pet">Pet Name</label>
                                <p>your Pet name
                                <address></address>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="type">Pet Type</label>
                                <p>your pet type
                                <address></address>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mt-3 mb-2 text-primary"><i class="fa fa-book" aria-hidden="true"></i>
                                Reservations</h6>
                            <div>
                                <p>
                                    Reservations list
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="slide" class="carousel slide container w-100">
                        <ol class="carousel-indicators">
                            <li data-target="#slide" data-slide-to="0" class="active"></li>
                            <li data-target="#slide" data-slide-to="1"></li>
                            <li data-target="#slide" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="contianer">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card" id="cards">
                                                <div class="card-body">
                                                    <div class="card1" style="text-align: center;">
                                                        <p>8 am</p>
                                                        <p> 12 may</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" id="cards">
                                                <div class="card-body">
                                                    <div class="card1" style="text-align: center;">
                                                        <p>8:30 am</p>
                                                        <p> 12 may</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" id="cards">
                                                <div class="card-body">
                                                    <div class="card1" style="text-align: center;">
                                                        <p>9 am</p>
                                                        <p> 12 may</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="contianer">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card" id="cards">
                                                <div class="card-body">
                                                    <div class="card1" style="text-align: center;">
                                                        <p>9:30 am</p>
                                                        <p> 12 may</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" id="cards">
                                                <div class="card-body">
                                                    <div class="card1" style="text-align: center;">
                                                        <p>10 am</p>
                                                        <p> 12 may</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" id="cards">
                                                <div class="card-body">
                                                    <div class="card1" style="text-align: center;">
                                                        <p>8 am</p>
                                                        <p> 13 may</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="contianer">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card" id="cards">
                                                <div class="card-body">
                                                    <div class="card1" style="text-align: center;">
                                                        <p>10 am</p>
                                                        <p> 12 may</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" id="cards">
                                                <div class="card-body">
                                                    <div class="card1" style="text-align: center;">
                                                        <p>10 am</p>
                                                        <p> 12 may</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" id="cards">
                                                <div class="card-body">
                                                    <div class="card1" style="text-align: center;">
                                                        <p>10 am</p>
                                                        <p> 12 may</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slide" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slide" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-md-10 text-center ">
                        <div class="btn btn-outline-primary" style="text-align: center;">Edit</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <br><br><br>
    <!--footer-->
    <div class="footer">
        <footer class="bg-light text-center text-lg-start fixed-bottom">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                ?? 2020 Copyright:
                <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
        </footer>
    </div>
    <!--footer-->


    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/profile.js"></script>
</body>

</html>