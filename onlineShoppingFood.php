<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/onlineShopping.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
            <div class="openbtn" onclick="openNav()">
                &#9776;</div>
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
    <div id="mySidebar" class="sidebar">
        <a href="onlineShoppingFood.html" class="active">Food</a>
        <a href="onlineShoppingTreats.html">Treats</a>
        <a href="onlineShoppingAccessories.html">Accessories</a>
        <a href="onlineShoppingToys.html">Toys</a>
        <a href="onlineShoppingMedicalDrugs.html">Medical Drugs</a>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>

    <h1 class="mainHeading">Food</h1>


    
    <div id="slide" class="carousel slide container ">
        <h2 class="heading">Dogs' Food</h2>
        <ol class="carousel-indicators">
            <li data-target="#slide" data-slide-to="0" class="active"></li>
            <li data-target="#slide" data-slide-to="1"></li>
            <li data-target="#slide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="products">
                    <div class="row">
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number1')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number1" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number1')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number2')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number2" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number2')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number3')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number3" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number3')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class=" products">
                    <div class="row">
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number4')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number4" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number4')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number5')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number5" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number5')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number6')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number6" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number6')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number7')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number7" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number7')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class=" products">
                    <div class="row">
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number8')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number8" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number8')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number9')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number9" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number9')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number10')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number10" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number10')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number11')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number11" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number11')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
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
    
    <div id="slidee" class="carousel slide container ">
        <h2 class="heading">Cats' Food</h2>
        <ol class="carousel-indicators">
            <li data-target="#slidee" data-slide-to="0" class="active"></li>
            <li data-target="#slidee" data-slide-to="1"></li>
            <li data-target="#slidee" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="products">
                    <div class="row">
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number1')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number1" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number1')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number2')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number2" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number2')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number3')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number3" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number3')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class=" products">
                    <div class="row">
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number4')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number4" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number4')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number5')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number5" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number5')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number6')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number6" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number6')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number7')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number7" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number7')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class=" products">
                    <div class="row">
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number8')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number8" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number8')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number9')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number9" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number9')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number10')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number10" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number10')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number11')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number11" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number11')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#slidee" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slidee" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <div id="slideee" class="carousel slide container ">
        <h2 class="heading">Mice Food</h2>
        <ol class="carousel-indicators">
            <li data-target="#slideee" data-slide-to="0" class="active"></li>
            <li data-target="#slideee" data-slide-to="1"></li>
            <li data-target="#slideee" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="products">
                    <div class="row">
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number1')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number1" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number1')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number2')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number2" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number2')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number3')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number3" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number3')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class=" products">
                    <div class="row">
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number4')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number4" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number4')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number5')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number5" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number5')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number6')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number6" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number6')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number7')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number7" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number7')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class=" products">
                    <div class="row">
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number8')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number8" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number8')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number9')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number9" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number9')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number10')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number10" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number10')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card cardView">
                                <img src="css/interceptor.png" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">23 L.E.</h3>
                                    <p>description</p>
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="" onclick="decrement('number11')">
                                                <span class="glyphicon glyphicon-minus">-</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="number11" name="quantity1"
                                                class="form-control input-number" value="0" min="1" max="100" step="1"
                                                style="width: 70px;">
                                        </div>

                                        <div class="col">
                                            <button type="button" onclick="incrementValue('number11')"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                                                data-field="">
                                                <span class="glyphicon glyphicon-plus">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row addToCart">
                                        <button class="btn btn-dark">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#slideee" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slideee" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <br><br><br><br>


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
    <script src="js/onlineShopping.js"></script>

</body>

</html>