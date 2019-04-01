<?php  
	$connect = mysqli_connect("localhost", "root", "", "web");
	$sql = "DELETE FROM client WHERE ID_CLIENT = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
	else 
	{
		echo 'Data cannot be deleted';
	}
 ?>