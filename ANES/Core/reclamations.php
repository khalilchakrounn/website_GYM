<?PHP
include "../conx.php";
class reclamations {



	function ajouterReclamaion($reclamation){
		$sql="insert into reclamation (Username,TYPE,CONTENU,IMAGE,ID_client) values (:USERNAME,:type,:contenu,:image,:ID_client)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $USERNAME=$reclamation->getUsername();
        $type=$reclamation->gettyp();
        $contenu=$reclamation->getmessage();
        $image=$reclamation->getImage();
        $ID_client=32;
		$req->bindValue(':USERNAME',$USERNAME);
		$req->bindValue(':type',$type);
		$req->bindValue(':contenu',$contenu);
		$req->bindValue(':image',$image);
        $req->bindValue(':ID_client',$ID_client);
          $req->execute();
           
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}


	

}

?>