<?PHP
include "../conx.php";
class reclamations {


  function REChRecl($search){
         $var=$search;

        $query = "
  SELECT * FROM reclamation 
  WHERE Id_reclamation LIKE '%".$var."%'
  OR Username LIKE '%".$var."%' 
  OR ID_client LIKE'%".$var."%' 
  OR ETAT LIKE '%".$var."%' 
  OR TYPE LIKE '%".$var."%'
    
    ORDER BY Id_reclamation DESC
  ";

     $db = config::getConnexion();
        try{
       
       
       

           return ( $db->query($query));
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             
        }
        
    }



  function AFFRecl(){
         
        $query = "
  SELECT * FROM reclamation ORDER BY Id_reclamation DESC ";

     $db = config::getConnexion();
        try{
       
       
       

           return ( $db->query($query));
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             
        }
        
    }





    function SuppReclamaion($id){
         $var=$id;
        $sql = "DELETE FROM reclamation WHERE Id_reclamation ='". $var. "'";  
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

        function Enable($id){
         $var=$id;
       $sql = "UPDATE reclamation SET  ETAT = 'treated' WHERE Id_reclamation = '".$var."'";  
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
       $sql = "UPDATE reclamation SET  ETAT = 'not treated' WHERE Id_reclamation = '".$var."'";  
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