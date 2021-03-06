<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Home</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/adminHome.css">
        <style>
            body {
                background-image: url("css/image.jpg");
            }
        </style>
    
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
            <ul class="navbar-nav">
                <a class="nav-item" href="#">
                    <img src="css/logo.png" width="60" height="60">
                </a>
    
                <div id="takeAction" class="collapse navbar-collapse">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#"  class="nav-link">Upgrade User</a>
                    </li>
                    <li class="nav-item">
                        <a href="#"  class="nav-link">Suspend User</a>
                    </li>
                    <li class="nav-item">
                        <a href="#"  class="nav-link">Profile</a>
                    </li>
                   <li class="nav-item">
                       <a href="#"  class="nav-link">Logout</a>
                   </li>
                </div>
            </ul>
            <a href="#takeAction" data-toggle="collapse" class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </a>
        </nav>

        <div class="banner-container">

            <div class="banner">
                <div class="shoe">
                    <img src="shoe.png" alt="">
                </div>
                <div class="content">
                    <span>upto</span>
                    <h3>50% 0ff</h3>
                    <p>offer ends after 5 days</p>
                    <a href="#" class="btn">veiw offer</a>
                </div>
                <div class="women">
                    <img src="women.png" alt="">
                </div>
            </div>
        
        </div>

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
    </body>

</html>