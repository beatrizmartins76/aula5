<html>
<head>
	<meta charset="utf-8">
	<title>
		Quantos anos você terá?
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

$idade = $_POST ['idade'];
$ano = $_POST ['ano'];
$anoatual= 2018;
$total = $ano - $anoatual;
$final = $total+$idade;
	echo "Você terá ".$final." no ano de ".$ano.".";
?>
<br>
<script type="text/javascript" src="voltar.js"></script>
</body>
</html>