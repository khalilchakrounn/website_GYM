<?php  
include "Clients.php";
 $client=new Clients();
	$msg=$client->ajouterClient($_POST["first_name"],$_POST["last_name"],$_POST["Email"],$_POST["Birthday"],$_POST["adresse"],$_POST["mobile"]);
if($msg="ok")  
{  
     echo 'Data Inserted';   
}  
else {echo 'please try later' ;}
 ?>

