<?PHP
include "../entites/reclamation.php";
include "reclamations.php";

if(!empty($_POST['email']) && !empty($_POST['choix']) && !empty($_POST['reviews']))
{
$recl=new reclamation($_POST['email'],$_POST['choix'],$_POST['reviews'],$_POST['img']);
$reclamation=new reclamations();
$reclamation->ajouterReclamaion($recl);
echo '<script language="javascript"> alert("Votre reclamation est envoyé '.$_POST['email'].'"); ;</script>';
  	 ?>
    <script type=""> location.replace("../views/reclamation.php");</script>
    <?php
}

//header('Location: index.html');
	

?>