<?php  
	$connect = mysqli_connect("localhost", "root", "", "web");
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE client SET ".$column_name."='".$text."' WHERE ID_CLIENT='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
		
	}  
 ?>