<?PHP
include "C:/wamp/www/crud/config.php";
class panierC {

	
	function ajouterPanier($panier){
		$sql="insert into panier (produit,qte,taille,prix) values (:produit,:qte,:taille,:prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		
        $produit=$panier->getProduit();
        $qte=$panier->getQte();
        $taille=$panier->getTaille();
        $prix=$panier->getPrix();
        
		$req->bindValue(':produit',$produit);
		$req->bindValue(':qte',$qte);
		$req->bindValue(':taille',$taille);
		$req->bindValue(':prix',$prix);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPanier(){
		//$sql="SElECT * From panier e inner join formationphp.panier a on e.produit= a.produit";
		$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPanier($id){
		$sql="DELETE FROM panier where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierPanier($id){
		$sql="UPDATE panier SET  produit=:produit ,qte=:qte ,taille=:taille ,prix=:prix WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $id=$panier->getId();
		$produit=$panier->getProduit();
        $qte=$panier->getQte();
        $prix=$panier->getPrix();
       
		$datas = array(':produit'=>$produit, ':qte'=>$qte,':taille'=>$taille,':prix'=>$prix);
		$req->bindValue(':produit',$produit);
		$req->bindValue(':qte',$qte);
		$req->bindValue(':taille',$taille);
		$req->bindValue(':prix',$prix);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPanier($id){
		$sql="SELECT * from panier where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListepaniers($prod){
		$sql="SELECT * from panier where ':produit'=>$prod";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>