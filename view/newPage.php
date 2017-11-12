<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Interview Test Page</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- This part can be organized with webpack -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../assets/js/script.js"></script>
        <link rel="stylesheet" href="../assets/css/main.css"
    </head>
    <body>

        <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Logo and toggle get grouped for better mobile display -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img class="center" src="../assets/css/images/logo.png">

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav">

                        <li class="dropdown menu"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Who we are <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our History</a></li>
                                <li><a href="#">Committree</a></li>
                                <li><a href="#">Patrons</a></li>
                            </ul>
                        </li>
                        <li class="menu"><a href="#">Our work</a></li>
                        <li class="menu"><a href="#">Support Us</a></li>
                        <li class="menu"><a href="#">Events</a></li>
                        <li class="menu"><a href="#">News</a></li>
                        <li class="menu"><a href="#">Contact Us</a></li>

                        <form class="navbar-form navbar-left">
                            <div class="input-group search">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <li><a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter color-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook color-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin color-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">

            <div class="titleContainer">
                <h2 class="titleFont bold">Women On the Move Against Cancer</h2>
                <h3 class="underTitleFont bold">We support the fight against cancer and help provide funds to continue vital research</h3>

                <br>
                <form>
                    <input type="radio" id="radio1" name="donamtionAmount" value="5" checked>
                    <label class="orange" for="radio1">£ 5</label>
                    <input type="radio" id="radio2" name="donamtionAmount"value="10">
                    <label class="green" for="radio2">£ 10</label>
                    <input type="radio" id="radio3" name="donamtionAmount" value="15">
                    <label class="orange" for="radio3">£ 15</label>
                    
                </form>
                <br>
           
                <p><input type="button" class="btn btn-success btn-lg bold donateButton" value="Donate >"></p>
                
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>    


            <div class="detailsContainer">
                <label class="detailsFont "> 1 in every 2 people will develop cancer at some point in their lives</label>
                <h5 class="underTitleFont">Join us and help make deifference in the continuing fight against cancer so we can end it once and for all</h5>

                <br>
            </div>    
            <br>

            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="serviceBox">
                            <div class="service-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <h3 class="title">Our History</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed ligula eu metus facilisis blandit. Nulla.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="serviceBox">
                            <div class="service-icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <h3 class="title">Our Work</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed ligula eu metus facilisis blandit. Nulla.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="serviceBox">
                            <div class="service-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <h3 class="title">Our Charities</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed ligula eu metus facilisis blandit. Nulla.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <br><br>



            <!-- Carousel Example usin Bootstrap plugin -->             

            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="../assets/css/images/slider1.png" alt="Los Angeles" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="../assets/css/images/slider2.png" alt="Chicago" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="../assets/css/images/slider3.png" alt="New york" style="width:100%;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- Footer Design -->

            <div class="container text-center">
                <hr />
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-md-3">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Work</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Events</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Donate</a></li>
                                <li><a href="#">Fundraise</a></li>          
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Committee Help</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>  
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="/">© 2013 WOMAC Inc.</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </body>
</html>                            