<html>
    <head> <title>Menu de Arreglos</title><head>
        <body>
            <form method="POST" action=""><br>
                Ingrese el numero de X:
                <input type="text"  name="X"><br>
                Ingrese el numero de Z:
                <input type="text"  name="Z"><br>
                <input type="submit"  value="valor"><br>
</form>
</body>
</html>
<?php
 $X = $_POST['X'];
 $Z = $_POST['Z'];
 $Y = $X * $Z + $Z + $X;
  echo "El valor de Y Es:" .$Y;
  ?>