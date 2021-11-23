<?php
class NombreCompleto 
{
 
   function NombreCompleto()
   {

   }

   function SaludoFormal($datos)
   {
     if ($datos[2] == "femenino"){
        echo "Estimada señora: " . $datos[0] . ", " .$datos[1];
        echo "<br>";
     }else{
        echo "Estimado señor: " . $datos[0] . ", ".$datos[1];
        echo "<br>";
     }
   
    }
    function SaludoInformal($datos)
   {
        echo "Hola!! " . $datos[0] . " " .$datos[1];
   
    }
      
   
}


$obj = new NombreCompleto();



$obj->SaludoFormal($valor);
$obj->SaludoInformal($valor);






?>