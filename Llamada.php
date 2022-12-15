<html>
    <head> <title>Menu de Arreglos</title><head>
        <body>
        <form action="#" method="post"><br>
                Ingrese un Numero:
                <input type="text"  name="LlamadadT" maxlength="2" size="2" /><br>
                <input type="submit"  value="Valor."><br>
</form>

<?php


$Llamada=$_POST['LlamadadT'];

if ($Llamada<=3){
  echo ("El valor de la Llamada cuesta 200 Pesos");
}
 else {
    $Extra=$Llamada-3;
    $Subtotal=$Extra*30;
    $Total=$Subtotal+200;
    
    echo ("El tiempo de la Llamada Fue:" ."  " .$Llamada ." " ."Minutos");
    echo "<hr>";
    echo ("El cobro es :" ." " .$Total ." " ."Pesos");
}
?>