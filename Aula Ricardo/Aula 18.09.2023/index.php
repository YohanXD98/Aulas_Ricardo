<!DOCTYPE html>
<html>
	<head>
		<title>Encontre o maior número</title>
	</head>
		<body>
		<h1>Encontre o maior número</h1>
		<form method= "post" action="">
			Número 1: <input type=number name="numero1">
			<br>
			Número 2: <input type=number name="numero2">
			<br>
			<br><input type="submit" value="Encontrar maior número">
		</form>

		<?php
			//função de encontrar o maior número
			function encontrar($num1, $num2) {
				if ($num1 > $num2) {
					return $num1;
				}else{
					return $num2;
				}
			}

			//verificar formulário
			if ($_SERVER ["REQUEST_METHOD"]=="POST"){
				$numero1 = $_POST["numero1"];
				$numero2 = $_POST["numero2"];
				
				$maior = Encontrar($numero1 , $numero2);
				echo "O maior número é: " . $maior;
			}
		?>