function controle()
{
	
	 var nom = document.getElementById('nom');
	 var tel = document.getElementById('tel');
	 var add = document.getElementById('add');
 var reg = document.getElementById('reg');
 var ville = document.getElementById('ville');
 var r1 = document.getElementById('r1');

 if (nom.value.length == 0 ||tel.value.length == 0 ||add.value.length == 0 ||
 	reg.value.length == 0 ||ville.value.length == 0 ||r1.value.length == 0 ) {
 	alert("remplir tout les champs");
 }

 if (tel.value.length < 0 || tel.value.length <8 ||tel.value.length > 8) {
 	alert("numero doit comporte 8 chiffres (positive)");
 }
}
