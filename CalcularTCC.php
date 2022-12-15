
<html>
<head>

</head>
<body>
<form method="POST" action="">
	<table>
		<tr>
			<td>
				<label>Base:</label>
			</td>
			<td>
				<input type="Number" step="" name="base1">
			</td>
		</tr>
		<tr>
			<td>
				<label>Altura</label>
			</td>
			<td>
				<input type="Number" step="" name="altura1">
			</td>
		</tr>
	</table>
	<input type="submit" name="Tr" value="Calcular Área del Triangulo">
	<?php 
	if (isset($_POST['Tr'])) {
		$Base = $_POST['base1'];
		$Altura = $_POST['altura1'];
		$Area = ($Base * $Altura) / 2 ;
		echo "<br>";
		echo "La Base es:" .$Base;
		echo "<br>";
		echo "La Altura es:" .$Altura;
		echo "<br>";
		echo "El Área del triangulo es: " . $Area;
	}
 ?>
	<hr>
	<table>
		<tr>
			<td>
				<label>Lado 1:</label>
			</td>
			<td>
				<input type="Number" step="" name="Lado1">
			</td>
		</tr>
		<tr>
			<td>
				<label>Lado 2</label>
			</td>
			<td>
				<input type="Number" step="" name="Lado2">
			</td>
		</tr>
	</table>
	<input type="submit" name="Cu" value="Calcular Área de Cuadrado">
	<?php
    if (isset($_POST['Cu'])) {
		$Lado1 = $_POST['Lado1'];
		$Lado2 = $_POST['Lado2'];
		$AreaC = ($Lado1 * $Lado2);
		echo "<br>";
		echo "Lado 1 es:" .$Lado1;
		echo "<br>";
		echo "Lado 2 es:" .$Lado2;
		echo "<br>";
		echo "El Área del Cuadrado es: " . $AreaC; 
	}
	?>
	<hr>
	<table>
			<tr>
				<td>
					<label>PI</label>
				</td>
				<td>
					<input type="Number" name="Pi" value="3.1416" disabled>
				</td>
			</tr>
			<tr>
				<td>
					<label>Valor del Radio</label>
				</td>
				<td>
					<input type="Number" step="0.00001" name="Radio">
				</td>
				<td>
					<label>Cm²</label>
				</td>
			</tr>
		</table>

		<input type="submit" name="C" value="Calcular Área">
		<?php 
	if (isset($_POST['C'])) {
		$Radio =$_POST['Radio'];
		$Pi=3.1416;
	    echo "<br>";
		echo "Pi: " .$Pi;
		echo "<br>";
		echo "Radio: " .$Radio;
		echo "<br>";
		echo "Radio al cuadrado: " . $Radio *$Radio;
		echo "<br>";
		echo "El área del circulo es: ". $Pi  * ($Radio *$Radio) . " Cm²";
	}

?>
</form>
</body>
</html>




	