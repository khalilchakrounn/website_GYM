<?php  

include "Clients.php";
if(isset($_GET['email']))
{
	 $client=new Clients();
$msg=$client->activer($_GET['mail']);
	if($msg='ok')  
	{  
		      ?>
      <script language="javascript">
      	 alert('Mail confirmed  ');
location.replace("../views/page profil.php");

</script>
<?PHP 
	}  
	else 
	{
		echo 'error';
	}
}
else{echo 'error2' ; }
 ?>



