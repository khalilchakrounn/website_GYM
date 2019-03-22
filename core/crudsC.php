<?PHP
include "../config.php";
include "../entites/produit.php";
include "../entites/abonement.php";
include "../entites/categorie.php";
class ProduitC {
	
	function ajouter_produit($produit){
		$sql="insert into produits (type,nom,quantite,cat_id,prix,description,ingredient,gout,poids,image) values (:type,:nom,:quantite,:cat_id,:prix,:description,:ingredient,:gout,:poids,:image)";
		$db = config::getConnexion();
		try{
		        	$req=$db->prepare($sql);

					        $type=$produit->gettype();
					        $nom=$produit->getnom();
					        $quantite=$produit->getquantite();
					        $cat_id=$produit->getidcat();
					        $prix=$produit->getprix();
					        $description=$produit->getdescription();
					        $ingredient=$produit->getingredient();
					        $gout=$produit->getgout();
					        $poids=$produit->getpoids();	
					        $image=$produit->getimage();

									$req->bindValue(':type',$type);
									$req->bindValue(':nom',$nom);
									$req->bindValue(':quantite',$quantite);
									$req->bindValue(':cat_id',$cat_id);
									$req->bindValue(':prix',$prix);
									$req->bindValue(':description',$description);
									$req->bindValue(':ingredient',$ingredient);
									$req->bindValue(':gout',$gout);
									$req->bindValue(':poids',$poids);
									$req->bindValue(':image',$image);
				
		            $req->execute();		           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	

	function afficher_produit(){
		$sql="SElECT id,nom,quantite,description,poids,gout,prix From produits";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



	function supprimer_produit($idd){
		$sql="DELETE FROM produits where id= :idd";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idd',$idd);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifier_produit($produit,$id){
		$sql="UPDATE produits SET id=:id, nom=:nom,prenom=:prenom,nbHeures=:nbH,tarifHoraire=:tarifH WHERE id=:id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
        					$id=$produit->getid();
							$type=$produit->gettype();
					        $nom=$produit->getnom();
					        $quantite=$produit->getquantite();
					        $cat_id=$produit->getidcat();
					        $prix=$produit->getprix();
					        $description=$produit->getdescription();
					        $ingredient=$produit->getingredient();
					        $gout=$produit->getgout();
					        $poids=$produit->getpoids();	
					        $image=$produit->getimage();


		$datas = array(':id'=>$id, ':type'=>$type, ':nom'=>$nom,':quantite'=>$quantite,':cat_id'=>$cat_id,':prix'=>$prix,':description'=>$description,':ingredient'=>$ingredient, ':gout'=>$gout,':poids'=>$poids,':image'=>$image);
									$req->bindValue(':id',$id);
									$req->bindValue(':type',$type);
									$req->bindValue(':nom',$nom);
									$req->bindValue(':quantite',$quantite);
									$req->bindValue(':cat_id',$cat_id);
									$req->bindValue(':prix',$prix);
									$req->bindValue(':description',$description);
									$req->bindValue(':ingredient',$ingredient);
									$req->bindValue(':gout',$gout);
									$req->bindValue(':poids',$poids);
									$req->bindValue(':image',$image);
		
		
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recuperer_produit($id){
		$sql="SELECT * from produits where id=$id";
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
















class categorieC {
	
	function ajouter_categorie($categorie){
		$sql="insert into categorie (nom,description) values (:nom,:description)";
		$db = config::getConnexion();
		try{
		        	$req=$db->prepare($sql);					        
					       
					        $nom=$categorie->getnom();
					        $description=$categorie->getdescription();
					        					
									$req->bindValue(':nom',$nom);
									$req->bindValue(':description',$description);
									
		            $req->execute();		           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	

	function afficher_categorie(){
		$sql="SElECT id,nom,description From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



	function supprimer_categorie($idd){
		$sql="DELETE FROM categorie where id= :idd";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idd',$idd);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifier_categorie($categorie,$id){
		$sql="UPDATE categorie SET nom=:nom,description=:description WHERE id=:id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
        					$id=$categorie->getid();							
					        $nom=$categorie->getnom();					        
					        $description=$categorie->getdescription();					       

		$datas = array(':id'=>$id, ':nom'=>$nom,':description'=>$description);
									$req->bindValue(':id',$id);									
									$req->bindValue(':nom',$nom);									
									$req->bindValue(':description',$description);
									
		
		
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recuperer_categorie($id){
		$sql="SELECT * from categorie where id=$id";
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












class abonementC {
	
	function ajouter_abonement($abonement){
		$sql="insert into abonement (nom_abonement,cour,duree,prix,image) values (:nom_abonement,:cour,:duree,:prix,:image)";
		$db = config::getConnexion();
		try{
		        	$req=$db->prepare($sql);

					        
					        $nom_abonement=$abonement->getnom_abonement();
					        $cour=$abonement->getcour();
					        $duree=$abonement->getduree();
					        $prix=$abonement->getprix();	
					        $image=$abonement->getimage();
									
									$req->bindValue(':nom_abonement',$nom_abonement);
									$req->bindValue(':cour',$cour);
									$req->bindValue(':duree',$duree);
									$req->bindValue(':prix',$prix);
									$req->bindValue(':image',$image);
				
		            $req->execute();		           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	

	function afficher_abonement(){
		$sql="SElECT id,nom_abonement,duree,cour,prix From abonement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



	function supprimer_abonement($idd){
		$sql="DELETE FROM abonement where id= :idd";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idd',$idd);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifier_abonement($abonement,$id){
		$sql="UPDATE abonement SET nom_abonement=:nom_abonement,cour=:cour,duree=:duree,prix=:prix WHERE id=:id"; //image=:imag
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
        					$nom_abonement=$abonement->getnom_abonement();
					        $cour=$abonement->getcour();
					        $duree=$abonement->getduree();
					        $prix=$abonement->getprix();	
					       // $image=$abonement->getimage();


		$datas = array(':nom_abonement'=>$nom_abonement,':cour'=>$cour,':duree'=>$duree,':prix'=>$prix);//':image=>$image'
									$req->bindValue(':id',$id);
									$req->bindValue(':nom_abonement',$nom_abonement);
									$req->bindValue(':cour',$cour);
									$req->bindValue(':duree',$duree);
									$req->bindValue(':prix',$prix);
									//$req->bindValue(':image',$image);
		
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recuperer_abonement($id){
		$sql="SELECT * from abonement where id=$id";
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