<?PHP
include "../../../entities/coach.php";
include "../../../core/coachC.php";

if (isset($_POST['date']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['hor']) and isset($_POST['message']) and isset($_POST['coaches']) and isset($_POST['tel'])){
$coach1=new coach($_POST['date'],$_POST['nom'],$_POST['prenom'],$_POST['hor'],$_POST['message'] ,$_POST['coaches'],$_POST['tel']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$coach1C=new coachC();
$coach1C->ajoutercoach($coach1);
header('Location: affichercoach.php');
	
}else{
	header('Location: affichercoach.php');
}


?>