<?PHP
include "../core/crudsC.php";
//include "../core/categorieC.php";

$catC=new categorieC();

if (isset($_POST['nom_categorie_input']) and isset($_POST['descript_categorie_input'])  )
{
	
$ca= new Categorie($_POST['nom_categorie_input'],$_POST['descript_categorie_input']);

$catC->ajouter_categorie($ca);
header('Location: tableaux.php');
	
}

else{
	echo "vérifier les champs";
	}


?>