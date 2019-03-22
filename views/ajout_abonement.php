<?PHP
include "../core/crudsC.php";
//include "../core/abonementC.php";

$abonC=new abonementC();

if (isset($_POST['abonement_input']) and isset($_POST['cour']) and isset($_POST['prix_a_input']) and isset($_POST['duree_box']) )
{
	$image=NULL;
	if(isset($_POST['image_input'])){$image=$_POST['image_input'];}


$abon= new Abonement($_POST['abonement_input'],$_POST['duree_box'],$_POST['cour'],$image,$_POST['prix_a_input']);

$abonC->ajouter_abonement($abon);
header('Location: tableaux.php');
	
}

else{
	echo "vérifier les champs";
	}


?>