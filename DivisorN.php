<?php
$Numero=8.0;
Echo "Divisor del Numero" .$Numero.":";
for ($i=1;$i<=$Numero;$i++){
    $Residuo=$Numero % $i;
    if($Residuo==0){
        Echo"[ ".$i."]";
    }
}
?>
