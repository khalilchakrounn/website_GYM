<?PHP
class panier{


	private $produit;
	private $qte;
	private $taille;
	private $prix;
	



	function __construct($produit,$qte,$taille,$prix){

		$this->produit=$produit;
		$this->qte=$qte;
		$this->taille=$taille;
		$this->prix=$prix;
		
	}
	

	function getProduit(){
		return $this->produit;
	}
	function getQte(){
		return $this->qte;
	}
	function getTaille(){
		return $this->taille;
	}
	function getPrix(){
		return $this->prix;
	}
	


	function setproduit($produit){
		$this->produit=$produit;
	}
	function setqte($qte){
		$this->qte=$qte;
	}
	function settaille($taille){
		$this->taille=$taille;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	
	
}

?>