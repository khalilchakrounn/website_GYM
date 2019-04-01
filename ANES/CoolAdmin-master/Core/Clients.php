<?PHP
include "../conx.php";
class Clients {

	 function afficherClient($id){
    $sql="SElECT * From client WHERE ID_CLIENT='$id'";
    $db = config::getConnexion();
    try{
    $info=$db->query($sql);
    return $info;
    }
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        } 
  }

  function REChClient($search){
         $var=$search;

        $query = "
  SELECT * FROM client 
  WHERE ID_CLIENT LIKE '%".$var."%'
  OR USERNAME LIKE '%".$var."%' 
  OR Firstname LIKE'%".$var."%' 
  OR Lastname LIKE '%".$var."%' 
  OR EMAIL LIKE '%".$var."%'
    OR mobile LIKE '%".$var."%'
    ORDER BY ID_CLIENT DESC
  ";

     $db = config::getConnexion();
        try{
           return ( $db->query($query));
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             
        }
        
    }


  function AFFClient(){
         
        $query = "
  SELECT * FROM client ORDER BY ID_CLIENT DESC ";

     $db = config::getConnexion();
        try{
           return ( $db->query($query));
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             
        }
        
    }


  function SuppClient($id){
         $var=$id;
        $sql = "DELETE FROM client WHERE ID_CLIENT ='". $var. "'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
        
    }
		
	
	function ajouterClient($a,$b,$c,$d,$e,$r){
		$sql="insert into client (Firstname,Lastname,EMAIL,mobile,BIRTHDAY,adresse) values (:Firstname,:Lastname,:EMAIL,:mobile,:BIRTHDAY,:adresse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
       $Firstname=$a;
        $Lastname=$b;
        $EMAIL=$c;
        $BIRTHDAY=$d;
       
        $adresse=$e;
          $mobile=$r;
		$req->bindValue(':EMAIL',$EMAIL);
	
		$req->bindValue(':Firstname',$Firstname);
		$req->bindValue(':Lastname',$Lastname);
		$req->bindValue(':BIRTHDAY',$BIRTHDAY);
		$req->bindValue(':mobile',$mobile);
		$req->bindValue(':adresse',$adresse);
          $req->execute();
           
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}


	function modifierClient($column_name,$text,$id){
		
		$sql = "UPDATE client SET ".$column_name."='".$text."' WHERE ID_CLIENT='".$id."'";  
		$db = config::getConnexion();
	  
		try{
			
        $req=$db->prepare($sql);
        $req->execute();
        return('ok');
        
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
            return('NO');
        }
		
	}



function entete(){


		$sql="DESC client";
		$db = config::getConnexion();
		try{
		$requete=$db->query($sql);
		$entete = $requete->fetchAll();
		return $entete;
		}
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        }	
	}


	function NombreReclamation_tr(){
			$sql=" SELECT COUNT(*)   FROM reclamation WHERE (ID_client='32' and ETAT='not treated ')" ;
		$db = config::getConnexion();
		try{
      $req=$db->prepare($sql);
     $req->execute(); 

$result = $req->fetch();
echo $result[0];
 }

catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }

	}

	function NombreReclamation(){
			$sql=" SELECT COUNT(*)  as tr   FROM reclamation " ;
		$db = config::getConnexion();
		try{
    
return ( $db->query($sql));

 }

catch (Exception $err){

  }

	}


        function Enable($id){
         $var=$id;
       $sql = "UPDATE client SET  status = 'active' WHERE ID_CLIENT = '".$var."'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
        
    }
        function Disable($id){
         $var=$id;
       $sql = "UPDATE client SET  status = 'Blocked' WHERE ID_CLIENT = '".$var."'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
        
    }
}

?>