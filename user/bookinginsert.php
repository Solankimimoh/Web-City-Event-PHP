<?php

if(isset($_REQUEST['sbmt']))
{
    
    $name = $_REQUEST['holdername'];
    $address = $_REQUEST['address'];
    $ticketcount = $_REQUEST['ticketcount'];
    $eventid = $_REQUEST['eventid'];
    $userid = $_REQUEST['userid'];
    
    
    if($name=="" || $address=="" || $ticketcount=="" || $eventid=="" || $userid=="")
    {
        ?>
<script>
    alert("Please fill the details");
    window.location.href = "bookinginsert.php";

</script>
<?php
    }else
    {
                
        include("include/Database.php");
        $db = new Database();
        
        
        $insertCompanyQuery = "INSERT INTO `booking`( `name`, `address`, `tickecount`, `event_id`, `users_id`) VALUES ('$name','$address','$ticketcount',$eventid,$userid)";
        
        $rowCount = mysqli_query($db->db_connect(),$insertCompanyQuery);
        
        if($rowCount > 0)
        {
           ?>
<script>
    alert("Booking Successfully");
    window.location.href = "events.php";

</script>
<?php
        }else
        {
            echo "Error Occured";
        }
        
    }
    
}
else
{
    
       ?>
<script>
    alert("Please fill the details");
    window.location.href = "bookinginsert.php";

</script>
<?php
}


?>
