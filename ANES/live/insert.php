<?php  
$connect = mysqli_connect("localhost", "root", "", "web");
$sql = "INSERT INTO client(Firstname, Lastname,Email,BIRTHDAY,adresse,mobile) VALUES('".$_POST["first_name"]."', '".$_POST["last_name"]."', '".$_POST["Email"]."', '".$_POST["Birthday"]."', '".$_POST["adresse"]."', '".$_POST["mobile"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';   
}  
else {echo 'please try later' ;}
 ?>}
