function valid()
{ 
  var nom =document.getElementById('nom');
  var tel =document.getElementById('tel');
  var prod =document.getElementById('prod');
var qte =document.getElementById('qte');
  var taille =document.getElementById('taille');
  var prix =document.getElementById('prix');
  var total =document.getElementById('total');
  
  var add =document.getElementById('add');
  var reg =document.getElementById('reg');
  var ville =document.getElementById('ville');
  var r1 =document.getElementById('r1');

  if (nom.value.length ==0 || tel.value.length ==0 || prod.value.length ==0
  	|| qte.value.length ==0|| taille.value.length ==0|| prix.value.length ==0
  	|| total.value.length ==0|| add.value.length ==0|| reg.value.length ==0
  	|| ville.value.length ==0|| r1.value.length ==0) {

  	alert("Remplir tous les champs");
  }
    
if (tel.value.length < 8 || tel.value.length>8 || (tel.value < 0) ) {

	alert("numero doit comporte 8 chiffres (positive)");
}

if (qte.value < 0) {

	alert("qte doit etre possitive");
}

if (taille.value < 0) {

	alert("taille doit etre possitive");
}
if (prix.value < 0) {

	alert("prix doit etre possitive");
}

if (total.value < 0) {

	alert("total doit etre possitive");
}
}