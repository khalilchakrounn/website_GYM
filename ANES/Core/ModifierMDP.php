<?PHP
include "../entites/client.php";
include "Clients.php";




if( isset($_POST['password']) && isset($_POST['pass2']) ){
	if($_POST['password']==$_POST['pass2'])
	{
    $client=new Client($_POST['password'],$_POST['pass2']);
	  $client1=new Clients();
$client1->modifierMDP($client); 
//sleep(5);
echo"<script language=\"javascript\">";
echo"alert('password changed')";
echo"</script>";
?>
<script >
document.location.href = '../views/page profil.php';
</script>
<?PHP 
}
else{echo"<script language=\"javascript\">";
echo"alert('password NOT IDENTICAL')";
echo"</script>";
?>
<script >
document.location.href = '../views/page profil.php';
</script>
<?PHP }
}


 else { echo"<script language=\"javascript\">";
echo"alert('PASSWORD CANNOT BE EMPTY')";
echo"</script>";}



 
    
//*/

?>