<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$to="belkisbaccar29@gmail.com";
$subject="confirmation commande";
$txt="votre commande est bien passe ";
$headers="From: dontreplay@fmt.com"."\r\n".
"CC : somebodyelse@example.com";
mail($to,$subject,$txt,$headers);
?>
</body>
</html>