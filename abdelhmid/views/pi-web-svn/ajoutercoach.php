<?PHP
include "../../entities/coach.php";
include "../../core/coachC.php";

if (!empty($_POST['date']) and !empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['hor']) and !empty($_POST['message']) and !empty($_POST['coaches']) and !empty($_POST['tel'])){
$coach1=new coach($_POST['date'],$_POST['nom'],$_POST['prenom'],$_POST['hor'],$_POST['message'] ,$_POST['coaches'],$_POST['tel']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$coach1C=new coachC();
$coach1C->ajoutercoach($coach1);
header('Location: coaches.html');
	
}else{
	header('Location: coaches.html');
}


?>