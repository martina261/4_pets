
<?php
include("doctorprofile_get.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/doctorprofile.css">
    <link rel="icon" href="css/logo.png" type="image/x-icon">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/fontawesome.min.css" rel="stylesheet">

</head>
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
    <!--profile-->


    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card" id="c1">
                    <div class="card-body">
                        <div class="pic" style="text-align: center;">
                            <div class="profile-pic-div">
                                <img src="css/OIP.jpg" alt="" id="photo" style="width:140px;height:140px;">
                                <input type="file" name="" id="file">
                                <label for="file" id="uploadBtn">choose photo</label>
                            </div>
                            <h5>Dr inshkah</h5>
                        </div>
                        <div class="about">
                            <h5>About</h1>
                                <p>doctor in **** study in**** graduated from***</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card" id="c2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-2 text-primary">
                                    <i class="fa-solid fa-id-card"></i> Personal Details</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-info">
                                    <label for="Name">Username</label>
                                    <p>Enter name</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-info">
                                    <label for="Experince">Experince</label>
                                    <p>Experince</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-info">
                                    <i class="bi-geo-alt"></i>
                                    <label for="location">location</label>
                                    <p>location</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-info">
                                    <label for="phone">phone</label>
                                    <p>phone</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-info">
                                    <label for="Email">Email</label>
                                    <p>Email</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-info">
                                    <label for="rate">Rating</label>
                                    <br>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mt-3 mb-2 text-primary">
                                    <i class="fa fa-book" aria-hidden="true"></i> appointment</h6>
                                    <p>
                                        appointment list
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                       
                        <br><br>
                        <div class="col-md-10 text-center">
                        <div class="btn btn-primary">Add Available Time</div>
                            <div class="btn btn-outline-primary">Edit</div>
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
                © 2020 Copyright:
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
