<?php
/* Menor de edad (Menor a 18 años) */
/* Adulto (Mayor o igual a 18 años y menor a 60 años) */
/* Adulto mayor (Mayor o igual a 60 años) */
/* Adicionalmente si la persona es mayor o igual a 18 años */

 $edad=100;

 if($edad<18){
    print("La persona es menor de edad");

 }
 else if($edad<100){
    print("La Persona es Adulto");
 }
 else{
    print("La Persona es Adulto Mayor");
 }

 ?>