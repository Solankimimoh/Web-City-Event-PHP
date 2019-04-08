<?php


include("include/Database.php");


if(isset($_REQUEST['sbmt']))
{

	$name = $_REQUEST['name'];
	$description = $_REQUEST['description'];
	
	$db = new Database();
	
	
	$insertQuery = "INSERT INTO `category`( `name`, `description`) VALUES ('$name','$description')";
	
	$insertCount = mysqli_query($db->db_connect(),$insertQuery);
	
	if($insertCount > 0)
	{
		header("Location: viewcategory.php");
	}else
	{
		echo "Error Occured";
	}
	
	
}else
{
	header("Location: addcategory.php");
}
	
	


?>
