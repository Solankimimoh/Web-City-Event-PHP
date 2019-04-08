<?php

require "include/Database.php";

$db = new Database();

if (isset($_REQUEST['sbmt'])) {
    
    $title       = $_REQUEST['title'];
    $description = $_REQUEST['description'];
    $datetime = date('Y-m-d H:i:s', strtotime($_REQUEST['datetime']));
    $venue = $_REQUEST['venue'];
    $ticketprice = $_REQUEST['ticketprice'];
    $organize = $_REQUEST['organize'];
    $category      = $_REQUEST['category'];
    
	
    $name        = $_FILES['image']['name'];
    $uploads_dir = realpath(dirname(__FILE__)) . "/upload";
    $path_info   = pathinfo($_FILES['image']['name']);
    $path_info['extension']; // "bill"
    $name = time() . uniqid(rand()) . "." . $path_info['extension'];
    
    
    
    if ($title == "" || $description == "" || $venue=="" || 
	   $ticketprice=="" || $organize=="") {
        echo "Data Not Found";
    } else {
        
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], "$uploads_dir/$name")) {
            
            echo $insertQuery = "INSERT INTO `events`(`title`, `description`, `datetime`, `venue`, `image`, `price`, `organize`, `category_id`) VALUES ('$title','$description','$datetime','$venue','$name','$ticketprice','$organize',$category)";
			
			 $result = mysqli_query($db->db_connect(), $insertQuery);
            
            
            if ($result > 0) {
                echo "<script>alert('you are succesfully registerd') </script>";
            header("Location: viewevent.php");

			} else {
                
            }
            
        } else {
            echo  "Upload failed!";
        }
        
        
//        
//                do insert code for database
//            
        
        
    }
    
    
} else {
    echo "NOT CLICKED";
    header("Location: index.php");
}

?>
