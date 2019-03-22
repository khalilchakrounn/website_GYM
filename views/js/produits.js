 var text  = /^[a-zA-Z]/; 
 var float = /^[0-9]+[.,]$/;
 var number= /^[0-9]$/;

   var produit_nom=  document.getElementById("produit_input") ;
   var produit_poids=  document.getElementById("poids_input") ;
   var produit_prix=  document.getElementById("prix_input") ;
   var idcat=  document.getElementById("idcat_input") ;
    var produit_quantite=  document.getElementById("quantite_input") ;
   var produit_type=  document.getElementById("type_input") ;     
   var produit_nature=document.getElementById("nature_input") ;

   var categorie_nom=document.getElementById("nom_categorie_input") ;
  
var abonement_prix=  document.getElementById("prix_a_input") ;
   var abonement_n=document.getElementById("abonement_input") ;
   var abonement_age=document.getElementById("age_input") ;


function reset_produits() 
{
    document.getElementById("formulaire_p").reset();
   
}
function reset_categorie() 
{
    document.getElementById("formulaire_c").reset();
   
}
function reset_abonement() 
{
    document.getElementById("formulaire_a").reset();
   
}

function submit_p()
{
//controle des champs vide	
					 if(  formulaire_p.quantite_input.value == "" || formulaire_p.prix_input.value == "" ||formulaire_p.produit_input.value == "" ||formulaire_p.type_input.value == "" || formulaire_p.descript_input.value == "" || formulaire_p.idcat_input.value == "")
						{ //|| formulaire_p.imagess_input.value == ""
								{alert("veuillez remplir les champs");}	
						}
//controle si type est faux
					/*if( formulaire_p.type_input.value != "consomables" && formulaire_p.type_input.value != "accessoires")
									{	alert("veuillez choisir un type valide");
										document.getElementById("formulaire_p").reset();}									
		*/
//controle si la quantite n'est pas un nombre
					if(number.test(produit_quantite.value) == true )
								{produit_quantite.style.color = 'orange';}
//controle si l'id de la categorie n'est pas un nombre
					if(number.test(idcat.value) == true )
								{idcat.style.color = 'orange';}							

//controle si le prix n'est pas un nombre ou float
					if(float.test(produit_prix.value) == true )
								{produit_type.style.color = 'orange';}

//controle si nom contient des nombres
					if (text.test(produit_nom.value) == false  )
						{ produit_nom.style.color = 'orange';} 	


// si le produit est une consomable 						
					if( formulaire_p.type_input.value == "consomables" )
							{//alors controle de la saisie des ingredients,poids,gout sont vide
								if(formulaire_p.ingred_input.value == ""||formulaire_p.poids_input.value == "" ||formulaire_p.gout.value == "")
								{alert("veuillez remplir les champs");}
//controle si le poids contient des symboles
								 if(float.test(produit_poids.value) == false )
								{produit_poids.style.color = 'orange';}

							}			
 }


function submit_c()
{
	if (formulaire_c.nom_categorie_input.value == "" || formulaire_c.descript_categorie_input.value == "" )
		{alert("veuillez remplir les champs");}

// controle : nom contient seulement des lettres		
		 if (text.test(categorie_nom.value) == false  )
					{ categorie_nom.style.color = 'orange'; }
	
			

}


function submit_a()
{
	if (formulaire_a.abonement_input.value == "" || formulaire_a.prix_a_input.value == ""||formulaire_a.cour_box.value == ""|| formulaire_a.duree_box.value == "" || formulaire_a.image_input.value == "" )
					{ 		alert("veuillez remplir les champs");}
		

//controle si nom de l'abonement contient des numeros		
		if (text.test(abonement_n.value) == false  )
					{ abonement_n.style.color = 'orange';} 

//controle si age du client contient des lettre
		if (number.test(abonement_age.value) == false  )
					{ abonement_age.style.color = 'orange';} 				

}