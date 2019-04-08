<?php

if(isset($_REQUEST['sbmt']))
{
    
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $mobile = $_REQUEST['mobile'];
    
    
    if($email=="" || $password=="" || $name=="" || $mobile=="")
    {
        ?>
<script>
    alert("Please fill the details");
    window.location.href = "registration.php";

</script>
<?php
    }else
    {
                
        include("include/Database.php");
        $db = new Database();
        
        
        $insertCompanyQuery = "INSERT INTO `users`( `name`, `email`, `password`, `mobile`) VALUES ('$name','$email','$password','$mobile')";
        
        $rowCount = mysqli_query($db->db_connect(),$insertCompanyQuery);
        
        if($rowCount > 0)
        {
           ?>
<script>
    alert("Registration Successfully");
    window.location.href = "login.php";

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
    window.location.href = "registration.php";

</script>
<?php
}


?>
