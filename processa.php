<?php
	$peso=$_POST["peso"];
	$altura=$_POST["altura"];
	$resultado=$peso/($altura*$altura);
	
	echo "Peso: $peso";
	echo "Altura: $altura";
	
	echo "Seu IMC é: $resultado";
?>