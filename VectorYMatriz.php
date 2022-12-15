<html>
    <head> <title>Menu de Arreglos</title><head>
        <body>
            <form method="POST">
                <label>Seleccione una Opcion</label>
                <input type="radio" value=1 name="opcion" required>Vectores
                <input type="radio" value=2 name="opcion" required>Matrices
                <input type="submit" value="Enviar">
</form>
</body>
</html>

<?php
if($_POST){
    $opcion=$_POST['opcion'];

    switch($opcion){
        case 1:
            echo "<strong>Vectores</strong><br><br>";
            $vector1[0]=1;$vector1[1]=2;$vector1[2]="3";$vector1[3]='a';$vector1[4]='Hola';
       foreach($vector1 as $valor)
       echo $valor." ";
       
       echo "<br><br><em>Otra Forma<em><br>";
       $Vector2['COLOMBIA']='BOGOTA';$Vector2['VENEZUELA']='CARACAS';
       $Vector2['CHILE']='SANTIAGO';$Vector2['URUGUAY']='MONTEVIDEO';
       $Vector2['PERU']='LIMA';
       foreach($Vector2 as $valor)
       echo $valor." ";
       echo "<br><br><em>Otra Forma<em><br>";
       $Vector3=array(1,2,"3",'a','Hola');
       foreach($Vector3 as $valor)
       echo $valor." ";

       echo "<br><br><em>Otra Forma<em><br>";

       $vector4[]=1;$vector4[]=2;$vector4[]="3";$vector4[]='a';$vector4[]='Hola';
       foreach($vector4 as $valor)
       echo $valor." ";
       break;

       case 2:
        echo "<strong>Matrices</strong><br><br>";
        $matriz1[0][0]=1; $matriz1[0][1]=2;
        $matriz1[1][0]="3"; $matriz1[1][1]='a';
        foreach ($matriz1 as $filas){
            foreach($filas as $celdas)
            echo $celdas." ";
            echo "<br>";
        }
        echo "<br><br><em>Otra Forma<em><br>";
        $Matriz2=array(array(1,2),array('a','3'));
        $i=0;

        for ($fil=0;$fil<2;$fil++){
            for($col=0;$col<2;$col++)
            echo $Matriz2[$fil][$col];
            echo "<br>";
        }
        break;
        default:
        echo "Error en el programa";
        break;
    }
}
?>
