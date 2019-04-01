
<?PHP
include "../../../core/courbC.php";
$courbC=new courbC();
if (isset($_POST["id"])){
	$courbC->supprimercourb($_POST["id"]);
	header('Location: affichercour.php');
}

?>