<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Calculadora IMC</title>
	</head>
	<body>
		<h2> Cálcule seu IMC </h2>
		<form action="processa.php" method="POST">
			<label>Peso:</label>
			<input type="number" name="peso"/>
			<br/>
			
			<label>Altura:</label>
			<input type="number" name="altura"/>
			<br/>
			
			<input type="submit" value="calcular"/>
		</form>
	</body>
</html>