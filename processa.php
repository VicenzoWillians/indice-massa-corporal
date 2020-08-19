<?php
	$peso=$_POST["peso"];
	$altura=$_POST["altura"];
	$resultado=$peso/($altura*$altura);
	
	$resultado=number_format($resultado, 1);
	
	echo "Seu IMC é: $resultado";
?>