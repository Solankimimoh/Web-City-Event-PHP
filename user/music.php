<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Event List</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body>

    <!-- Navigation -->
    <?php
    
    include("include/menu.php");
    
    ?>
        <!-- Page Content -->
        <div class="container overflow-auto" style="top:56px; position:relative;">

            <div class="row ">

                <div class="col-lg-3">

                    <h1 class="my-4">Category Name</h1>
                    <div class="list-group">
                        <a href="music.php" class="list-group-item">Music Events</a>
                        <a href="education.php" class="list-group-item">Educational Events</a>
                        <a href="#" class="list-group-item">Social Events</a>
                    </div>

                </div>
                <!-- /.col-lg-3 -->

                <div class="col-lg-9">

                    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="../user/images/maxresdefault.jpg" height="300" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="../user/images/1219145071.jpeg" height="300" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="../user/images/new.jpg" height="300" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
                    </div>

                    <div class="row">

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="../user/images/javed%20ali.jpg" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="">Javed Ali Live Concert</a>
                                    </h4>

                                    <p class="card-text"></p>
                                </div>

                                <i class="fa fa-map-marker-alt">
                                   <span class="city" aria-describedby="cdk-describedby-message-0" cdk-describedby-host="">Rajpath Club,Ahmedabad</span>
                                </i>
                                <i class="fa fa-rupee-sign">
                                    <span class="price">
                                    <span class="WebRupee"></span>
                                        
                                    <span>1000</span>
                                
                                    </span>
                                </i>
                                <span class="date-and-time">
                                    
                                11 April 2019 9:30AM
                </span>
                                <div class="card-footer">
                                    <small class="text-muted">#Music</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="../user/images/music.jpg" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="">Arjit Sinh Live Concert</a>
                                    </h4>

                                    <p class="card-text"></p>
                                </div>
                                <i class="fa fa-map-marker-alt">
                                   <span class="city" aria-describedby="cdk-describedby-message-0" cdk-describedby-host="fa fa-map-marker-alt">Ahmedabad</span>
                                </i>
                                <i class="fa fa-rupee-sign">
                                <span class="price"><span class="WebRupee"></span> <span>2000</span> </span>
                                     </i>
                                <span class="date-and-time">
                    
                                20 Oct 2019 7:00-10:00 PM 
                </span>
                                <div class="card-footer">
                                    <small class="text-muted">#music </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="../user/images/Learning%20concert.jpg" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="">Learning Concert of India</a>
                                    </h4>

                                    <p class="card-text"></p>
                                </div>
                                <i class="fa fa-map-marker-alt">
                                   <span class="city" aria-describedby="cdk-describedby-message-0" cdk-describedby-host="">Sector 17,Ghandhinagar</span>
                                </i>

                                <span class="price"><span class="WebRupee"></span> <span>free</span> </span>

                                <span class="date-and-time">
                    
                                13 April 2019 7:00 to 11:00 PM
                </span>
                                <div class="card-footer">
                                    <small class="text-muted">#Music</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="../user/images/entertainment.jpg" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="">Entertainment Night</a>
                                    </h4>

                                    <p class="card-text"></p>
                                </div>
                                <i class="fa fa-map-marker-alt">
                                   <span class="city" aria-describedby="cdk-describedby-message-0" cdk-describedby-host="fa fa-map-marker-alt">Ahmedabad</span>
                                </i>
                                <i class="fa fa-rupee-sign">
                                <span class="price"><span class="WebRupee"></span> <span>2000</span> </span>
                                </i>
                                <span class="date-and-time">
                    
                                25 Feb 2019 8:00 PM Ownwards
                </span>
                                <div class="card-footer">
                                    <small class="text-muted">#Music </small>
                                </div>
                            </div>
                        </div>

                        <!-- /.row -->

                    </div>
                    <!-- /.col-lg-9 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

            <!-- Footer -->
            <footer class="py-5 bg-dark" style="position:relative;
   top:56px;">
                <div class="container">
                    <p class="m-0 text-center text-white">Copyright &copy; City Fair</p>
                </div>
                <!-- /.container -->
            </footer>

            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        </div>
</body>

</html>
