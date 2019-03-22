<?PHP
include "../core/crudsC.php";
//include "../core/ProduitsC.php";

$prC=new ProduitC();

if (isset($_POST['type_input']) and isset($_POST['produit_input']) and isset($_POST['quantite_input']) and isset($_POST['idcat_input']) and isset($_POST['prix_input'])and isset($_POST['descript_input']) )
{
	$image=NULL;
	if(isset($_POST['imagess_input'])){$image=$_POST['imagess_input'];}
$pr= new Produit($_POST['type_input'],$_POST['produit_input'],$_POST['quantite_input'],$_POST['idcat_input'],$_POST['prix_input'],$_POST['descript_input'],$_POST['ingred_input'],$_POST['gout'],$_POST['poids_input'],$image);//

$prC->ajouter_produit($pr);
header('Location: tableaux.php');
	
}

else{
	echo "vérifier les champs";
	}


?>