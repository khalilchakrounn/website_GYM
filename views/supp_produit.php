<?PHP
include "../core/crudsC.php";
//include "../core/ProduitsC.php";
$PRC=new ProduitC();


if (isset($_GET['delete'])){
	$PRC->supprimer_produit($_GET['delete']);
	header('Location: tableaux.php');
}

?>