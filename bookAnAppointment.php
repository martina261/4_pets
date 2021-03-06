<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4Pets</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bookAnAppointment.css">
    <style>
        body {
            background-image: url("css/image.jpg");
        }
    </style>
    <script src="js/bookAnAppointment.js"></script>

</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
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

    <!--table booking-->
    <div class="containery">
        <!--searching-->
        <div class="row align-items-center justify-content-center">
            <div class="col">
                <h2>Available Appointments</h2>
            </div>
            <div class="col">
                <input type="text" id="name" class="search form-control" onkeyup="searchName()" placeholder="Dr. ....">
            </div>
            <div class="col">
                <input type="date" id="date" class="search form-control" onkeyup="searchDate()" placeholder="Date">
            </div>
            <div class="col">
                <input type="text" id="price" class="search form-control" onkeyup="searchPrice()" placeholder="Price">
            </div>

        </div>
        <span class="counter pull-right"></span>
        <!--searching-->

        <table class="table table-hover table-bordered" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th style="width: 25%;" scope="col">Dr's Name</th>
                    <th style="width: 25%;" scope="col">Date</th>
                    <th style="width: 25%;" scope="col">price</th>
                    <th style="width: 25%;" scope="col">Book here</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Inshkah</th>
                    <td>2022-05-1</td>
                    <td>100</td>
                    <td scope="col">
                        <button type="button" class="btn btn-outline-dark">Book</button>
                    </td>
                </tr>
                <tr>
                    <td>AbdAlshakor</th>
                    <td>2022-05-2</td>
                    <td>50</td>
                    <td>
                        <button type="button" class="btn btn-outline-dark  ">Book</button>
                    </td>
                </tr>
                <tr>
                    <td>Mina</th>
                    <td>2022-05-3</td>
                    <td>70</td>
                    <td>
                        <button type="button" class="btn btn-outline-dark ">Book</button>
                        </th>
                </tr>
                <tr>
                    <td>Marina</th>
                    <td>2022-05-4</td>
                    <td>20</td>
                    <td>
                        <button type="button" class="btn btn-outline-dark ">Book</button>
                        </th>
                </tr>
                <tr>
                    <td>Martina</th>
                    <td>2022-05-5</td>
                    <td>200</td>
                    <td>
                        <button type="button" class="btn btn-outline-dark ">Book</button>
                        </th>
                </tr>
                <tr>
                    <td>Abanoub</th>
                    <td>2022-05-6</td>
                    <td>10</td>
                    <td>
                        <button type="button" class="btn btn-outline-dark ">Book</button>
                        </th>
                </tr>
                <tr>
                    <td>Fady</th>
                    <td>2022-05-7</td>
                    <td>55</td>
                    <td>
                        <button type="button" class="btn btn-outline-dark ">Book</button>
                        </th>
                </tr>
                <tr>
                    <td>Joyce</th>
                    <td>2022-05-8</td>
                    <td>60</td>
                    <td>
                        <button type="button" class="btn btn-outline-dark ">Book</button>
                        </th>
                </tr>
                <tr>
                    <td>Rania</th>
                    <td>2022-05-9</td>
                    <td>60</td>
                    <td>
                        <button type="button" class="btn btn-outline-dark ">Book</button>
                        </th>
                </tr>
                <tr>
                    <td>Toqa</th>
                    <td>2022-05-5</td>
                    <td>90</td>
                    <td>
                        <button type="button" class="btn btn-outline-dark ">Book</button>
                        </th>
                </tr>
                <tr>
                    <td>Fatma</th>
                    <td>2022-05-11</td>
                    <td>120</td>
                    <td>
                        <button type="button" class="btn btn-outline-dark ">Book</button>
                        </th>
                </tr>

            </tbody>

        </table>
    </div>

    <!--table booking-->

    <br><br><br>

    <!--footer-->
    <div class="footer">
        <footer class="bg-light text-center text-lg-start fixed-bottom ">
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