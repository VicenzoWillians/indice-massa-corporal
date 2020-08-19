<?php
	$peso=$_POST["peso"];
	$altura=$_POST["altura"];
	$resultado=$peso/($altura*$altura);
	
	echo 'Seu IMC é:' . round($resultado), 1) . '';
?>