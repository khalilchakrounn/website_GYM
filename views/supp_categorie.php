<?PHP
include "../core/crudsC.php";
//include "../core/categorieC.php";
$caC=new categorieC();


if (isset($_GET['delete'])){
	$caC->supprimer_categorie($_GET['delete']);
	header('Location: tableaux.php');
}

?>