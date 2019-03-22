<?PHP
include "../config.php";
include "../entites/produit.php";
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

?>