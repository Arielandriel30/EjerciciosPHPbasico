<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bonomio</title>
</head>
<body>
<form class="w3-container w3-card-4" action="#" method="post">
<input type="number" name="valor1" class="w3-input" placeholder="Colocar el primer valor" required>
<input type="number" name="valor2" class="w3-input" placeholder="Colocar el segundo valor" required>
<input type="submit" class="w3-button w3-khaki" name="resultado">
 </form>
<?php

if(isset($_POST['valor1']) && !empty($_POST['valor2']))

{
    $valorUno= $_POST["valor1"];
    $valorDos= $_POST["valor2"];
    //binomioCuadradoPerfecto($valorUno, $valorDos);
    binomioCuadradoPerfectoDos($valorUno, $valorDos);
}else{
    echo "ingrese dos valores";
}
/*function binomioCuadradoPerfecto($v1, $v2){
    $resultado= pow ($v1+$v2, 2);
    echo "Biniomio Cuadrado Perfecto".$resultado;
}*/

function binomioCuadradoPerfectoDos($v1, $v2){
    $resultado= pow($v1, 2)+(2*$v1*$v2)+pow($v2, 2); 
    echo $resultado;
}


?>

</body>
</html>