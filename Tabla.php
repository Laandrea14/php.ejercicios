<html>
    <head> <title>Menu de Arreglos</title><head>
        <body>
        <form action="#" method="post"><br>
                Ingrese un Numero:
                <input type="text"  name="num" maxlength="2" size="2" /><br>
                <input type="submit"  value="Ver tabla de multiplicar."><br>
</form>

<?php


$n=$_POST['num'];
$multiplicador;

for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
	echo "$n" . " X " . $multiplicador . " = " . $n * $multiplicador;
	echo "<br>";
}
 ?>
  </body>
</html>