<?PHP
include "C:/wamp/www/crud/config.php";
class commandeC {

	
	function ajouterCommande($commande){
		$sql="insert into commande (nom_prenom,tel,nom_prod,quantite,taille,prix,adresse,region,ville,mode_livraison,mode_paiement) values (:nom_prenom,:tel,:nom_prod,:quantite,:taille,:prix,:adresse,:region,:ville,:mode_livraison,:mode_paiement)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		
        $nom_prenom=$commande->getNom_prenom();
        $tel=$commande->getTel();
        
        $nom_prod=$commande->getNom_prod();
        $quantite=$commande->getQuantite();
        $taille=$commande->getTaille();
        $prix=$commande->getPrix();
        $adresse=$commande->getAdresse();
        $region=$commande->getRegion();
        $ville=$commande->getVille();
        $mode_livraison=$commande->getMode_livraison();
        $mode_paiement=$commande->getMode_paiement();
        
		$req->bindValue(':nom_prenom',$nom_prenom);
		$req->bindValue(':tel',$tel);
		
		$req->bindValue(':nom_prod',$nom_prod);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':taille',$taille);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':region',$region);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':mode_livraison',$mode_livraison);
		$req->bindValue(':mode_paiement',$mode_paiement);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCommande(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.nom_prenom= a.nom_prenom";
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCommande($id){
		$sql="DELETE FROM commande where id= :id";
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
	function modifierCommande($commande,$id){
		$sql="UPDATE commande SET  nom_prenom=:nom_prenom, tel=:tel, nom_prod=:nom_prod , quantite=:quantite , taille=:taille , prix=:prix ,adresse=:adresse, region=:region, ville=:ville, mode_livraison=:mode_livraison, mode_paiement=:mode_paiement WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{	
        $req=$db->prepare($sql);
        
		
        $nom_prenom=$commande->getNom_prenom();
        
        $tel=$commande->getTel();
        $nom_prod=$commande->getNom_prod();
        $quantite=$commande->getQuantite();
        $taille=$commande->getTaille();
        $prix=$commande->getPrix();
        $adresse=$commande->getAdresse();
        $region=$commande->getRegion();
        $ville=$commande->getVille();
        $mode_livraison=$commande->getMode_livraison();
        $mode_paiement=$commande->getMode_paiement();
        
        
        $datas = array( ':nom_prenom'=>$nom_prenom, ':tel'=>$tel , ':nom_prod'=>$nom_prod , ':quantite'=>$quantite , ':taille'=>$taille , ':prix'=>$prix ,':adresse'=>$adresse,':region'=>$region,':ville'=>$ville,':mode_livraison'=>$mode_livraison, ':mode_paiement'=>$mode_paiement);

$req->bindValue(':id',$id);
		$req->bindValue(':nom_prenom',$nom_prenom);
		
		$req->bindValue(':tel',$tel);
		$req->bindValue(':nom_prod',$nom_prod);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':taille',$taille);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':region',$region);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':mode_livraison',$mode_livraison);
		$req->bindValue(':mode_paiement',$mode_paiement);
		
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   //echo " Les datas : " ;
  //print_r($datas);
        }
		
	}
	function recupererCommande($id){
		$sql="SELECT * from commande where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function recupererCommandenom($nom){
		$sql="SELECT * from commande where nom_prenom='$nom'";
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