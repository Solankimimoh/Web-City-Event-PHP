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
    <div class="container overflow-auto" style="top:56px; position:relative;">

        <div class="row ">


            <div class="col-lg-12 py-5">

                    <h1 align="center" class="p-3"> BOOKING LIST </h1>
                <div class="card">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">EVENT NAME</th>
                                <th scope="col">TICKET HOLDER NAME</th>
                                <th scope="col">TICKET COUNT</th>
                                <th scope="col">ADDRESS</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                                require "include/Database.php";
                                $db = new Database();     
                        $userid = $_SESSION['usersid'];
            $selectbooking = "SELECT * FROM `booking` WHERE `users_id` =$userid";
                       $result = mysqli_query($db->db_connect(),$selectbooking);
                        
                        while($row = mysqli_fetch_row($result))
                        {
                            ?>
                            <tr>
                                <th scope="row"><?php  echo $row[0];?></th>
                                <td><?php  echo $_SESSION['usersname'];?></td>
                                <td>

                                    <?php 
                                
                                $slectevent = "SELECT * FROM `events` WHERE `id`=$row[4]";
                                
                            $result1 = mysqli_query($db->db_connect(),$slectevent);
                            
                            while($row1=mysqli_fetch_row($result1))
                            {
                                echo $row1[1];
                            }
                            
                                
                                ?>

                                </td>
                                <td><?php echo $row[1]; ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                            </tr>
                            <?php
                        }
                        
                        ?>



                        </tbody>
                    </table>

                </div>

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
