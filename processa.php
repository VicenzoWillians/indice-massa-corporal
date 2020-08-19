<?php
	$peso=$_POST["peso"];
	$altura=$_POST["altura"];
	$altura=$altura*$altura;
	$resultado=$peso/$altura;
	
	echo "Peso: $peso \br";
	echo "Altura: $altura \br";
	
	echo "Seu IMC é: $resultado";
?>