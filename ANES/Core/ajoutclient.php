<?PHP
include "../entites/client.php";
include "Clients.php";

     $token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
        $token = str_shuffle($token);
        $token = substr($token, 0, 10);
        $email =$_POST['email'];
$client=new Client($_POST['username'],$_POST['email'],$_POST['password'],$_POST['first_name'],$_POST['last_name'],$_POST['dateofbirth'],'' ,$_POST['mobile_no'], 
	$_POST['gender'], $_POST['address'],$token);
if( isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['first_name'])  && isset($_POST['last_name'])  && isset($_POST['mobile_no'])  && isset($_POST['gender']) && isset($_POST['address']) ){
$mail=$_POST['email'];
	$client1=new Clients();
$client1->ajouterClient($client);

require_once "phpmailer/class.phpmailer.php";

$base_url = "http://localhost/pi-web-svn/Core/";
$message = "<p>Hi ".$_POST['username'].",</p>
      <p>Thanks for Registration. this account will work only after your email verification.</p>
      <p>Please Open this link to verify your email address - ".$base_url."activer.php?activation_code=".$token." email"
      .$mail."
      <p>Best Regards,<br />BF Academy</p>
      ";



        

$mail = new PHPMailer(true);


$mail->IsSMTP();


$mail->SMTPDebug = 0;


$mail->SMTPAuth = true;

// sets the prefix to the server
$mail->SMTPSecure = 'ssl';


$mail->Host = 'smtp.gmail.com';


$mail->Port = 465;


$mail->Username = 'anes.temani@esprit.tn';


$mail->Password = 'anes1996';


$mail->SetFrom('anes.temani@esprit.tn', 'anes');


$mail->AddAddress($_POST['email']);

//
$mail->MsgHTML($message);


try {
    // send mail
    $mail->Send();
    $msg = "Mail send successfully";
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}




      ?>
      <script language="javascript">
      	 alert('thank you for your registration please verify your email ');
window.location.href="../views/login.php";


</script>
<?PHP 




}
  else{ 
            echo "Failed";
        }
        
	

//*/

?>