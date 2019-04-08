<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CITY FAIR</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>

<body class="h-100">

    <?php
    
    include("include/menu.php");
    
    ?>

    <!-- Header with Background Image -->
    <header class="business-header h-100">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-lg-12">
                    <h1 class="display-2 font-weight-bold text-uppercase text-center text-white mt-4">City Fair</h1>
                    <p class="text-center text-white " style="font-size:17px; line-height:1.8;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    </p>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2 class="mt-4">What We Do</h2>
                <p>We Can Under The Web Site,Ii is the possible to get information about the event and to get information from the inside of it's address,contact,etc</p>
                <p>
                </p>
            </div>


            <div class="row">
                <div class="col-sm-4 my-4">
                    <div class="card">
                        <img class="card-img-top" src="images/BACK%20PATANG.jfif">
                        <div class="card-body">
                            <h4 class="card-title">Event List</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                        </div>
                        <div class="card-footer">
                            <a href="events.php" class="btn btn-primary">Search More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                        <img class="card-img-top" src="images/Sabarmati-River-Front-1.jpg" height="45%">
                        <div class="card-body">
                            <h4 class="card-title">Booking</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Search More</a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 my-4">
                    <div class="card">
                        <img class="card-img-top" src="images/kankariya.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Blank</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Search More</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->

        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container-fluid bg-dark">
            <p class="m-0 text-center text-white">Copyright &copy; cityfair</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
