<?php
session_start();

if(!isset($_SESSION['usersname']))
{
    header("Location: index.php");
}
?>
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
    <div class="container overflow-auto" style="top:70px; position:relative;">

        <div class="row ">



            <?php 
                               require "include/Database.php";
$db = new Database();     
                            ?>


            <!-- /.col-lg-3 -->

            <div class="col-lg-12">

             
                <?php
                
$id = $_GET['id'];

                $selectevent = "SELECT * FROM `events`  WHERE `category_id`=$id";
                
                $result = mysqli_query($db->db_connect(),$selectevent);
                
                
                
                
                ?>

                <div class="row">


                    <?php
                    
                    while($row = mysqli_fetch_row($result))
                    {
                      ?>
                    <div class="col-lg-4 col-md-6 mb-4 shadow-sm">

                        <div class="card">
                            <a href="../admin/upload/<?php echo $row[5]; ?>" target="_blank">
                                <img class="card-img-top" src="../admin/upload/<?php echo $row[5]; ?>" alt="">
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">
                                    <strong><a href=""><?php echo $row[1] ?></a></strong>
                                </h4>
                                <p class="card-text"><?php echo $row[2] ?></p>
                                <p>
                                    <i class="fa fa-map-marker-alt">

                                        <a target="_blank" href="http://maps.google.com/?q=<?php echo $row[4] ?>">
                                            <span class="city" aria-describedby="cdk-describedby-message-0" cdk-describedby-host=""><?php echo $row[4] ?></span></a>
                                    </i>
                                </p>
                                <p>
                                    <i class="fa fa-user-friends" style="color:#999">
                                        <span><?php echo $row[7] ?></span>
                                    </i>
                                </p>
                                <p>
                                    <i class="fa fa-rupee-sign">
                                        <span class="price">
                                            <span class="WebRupee"></span>

                                            <?php if($row[6]=="0")
                      {
                          ?>
                                            <span style="color:green">Free</span>

                                            <?php
                      }else
                      {
                          echo $row[6];
                      }
                                            ?>
                                        </span>
                                    </i>
                                </p>
                                <p>
                                    <i class="fa fa-calendar-alt" style="color:#999">

                                        <span class="date-and-time">

                                            <?php
                       
                                            ?>
                                            <a target="_blank" title="add to calender" href="https://calendar.google.com/calendar/r/eventedit?text=<?php echo $row[1]; ?>&location=<?php echo $row[4] ?>">
                                                <?php 
                        
                        $date=date_create($row[3]);
                        echo date_format($date,"d/M/Y H:i a"); 
                        ?>
                                            </a>

                                        </span>
                                    </i>
                                </p>

                            </div>



                            <div class="card-footer " style="text-align:center;font-size:20px;">
                                <small class="text-muted">
                                    <strong>
                                        <?php 
                                    
                                $selectCategory = "SELECT * FROM `category` WHERE `id`=$row[8]";
                        
                        $resultCate = mysqli_query($db->db_connect(),$selectCategory);
                        
                        while($row1= mysqli_fetch_row($resultCate))
                        {
                         echo $row1[1];   
                        }
                        
                        
                                    ?>
                                    </strong>
                                </small>
                                <div class="w-100" style="text-align:center">
                                    <a href="bookticket.php?id=<?php echo $row[0];?>" class="btn btn-success">Book Now</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <?php  
                    }
                    ?>

                </div>
                <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container-fluid bg-dark">
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
