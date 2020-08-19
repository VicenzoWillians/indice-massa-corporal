<?php
	$peso=$_POST["peso"];
	$altura=$_POST["altura"];
	
	$altura=$altura*$altura;
	$resultado=$peso/$altura;
	
	echo "Peso: $peso";
	echo "Altura: $altura";
	
	echo "Seu IMC é: $resultado";
?>