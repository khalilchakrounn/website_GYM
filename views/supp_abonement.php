<?PHP
include "../core/crudsC.php";
//include "../core/abonementC.php";
$abC=new abonementC();


if (isset($_GET['delete'])){
	$abC->supprimer_abonement($_GET['delete']);
	header('Location: tableaux.php');
}

?>