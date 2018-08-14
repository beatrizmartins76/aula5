<html>
<head>
	<meta charset="utf-8">
	<title>
		Quantos anos você terá?
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<img src="http://2.bp.blogspot.com/-mojHkAGoZ6w/Uj0YHN0iviI/AAAAAAAAYRY/r4jwBx12zhc/s1600/Bolo-de-Anivers%C3%A1rio-em-png-queroiamgem-Cei%C3%A7a-Crispim+(1).png" widht="100px" height="150px"></img><br><br>
<?php

$idade = $_POST ['idade'];
$ano = $_POST ['ano'];
$anoatual= 2018;
$total = $ano - $anoatual;
$final = $total+$idade;
	echo "No ano de ".$ano." a idade é de ".$final." anos";
?>
<br><br>
<script type="text/javascript" src="voltar.js"></script>
</body>
</html>