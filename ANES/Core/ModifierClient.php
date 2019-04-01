<?PHP
include "../entites/client.php";
include "Clients.php";



$client=new Client($_POST['uname'],$_POST['email'],$_POST['mobile'],$_POST['location']);
if( isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['location']) ){
 
      ?>
      <script language="javascript">
      	 alert('your data has been updated. thank you !');
setTimeout(myFunction, 0)

function myFunction() {
	 location.replace("../views/page profil.php")

}


</script>
<?PHP 

            $client1=new Clients();
$client1->modifierClient($client);

        }
        else{ 
            echo "Failed";
        }


 
    
//*/

?>