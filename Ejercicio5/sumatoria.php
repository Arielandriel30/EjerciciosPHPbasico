<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumatoria</title>
</head>
<body>
<form class="w3-container w3-card-4" action="#" method="post">
<input type="number" class="w3-input" name="valores[]" placeholder="Ingresar un número" required>
<input type="number" class="w3-input" name="valores[]" placeholder="Ingresar un número" required>
<input type="number" class="w3-input" name="valores[]" placeholder="Ingresar un número" required>
<input type="number" class="w3-input" name="valores[]" placeholder="Ingresar un número" required>
<input type="submit" class="w3-button w3-khaki"  name="sumar">
 </form>

 <?php
if(isset($_POST['sumar'])){
    $valores=$_POST['valores'];
     sumatoria($valores);
  // print_r ($valor);
   
}else{
    echo "ingrese los valores";
}
//echo array_sum($valores);


function sumatoria($valores){
    /*-------------FOREACH--------------------*/
 /* 
$suma = 0;
foreach ($valores as $numero) {
 $suma += $numero;
}
echo "LA SUMA DE TODOS LOS VALORES ES: $suma";
echo "<br>";
*/
/*-------------FOR--------------------*/
/*
$suma = 0; 
for($i=0;$i<=3;$i++) {
$suma += $valores[$i]; 
}
echo 'LA SUMA DE TODOS LOS VALORES ES: = '.$suma;
echo "<br>";
*/
/*-------------WHILE--------------------*/
$suma=0;
$a=0;
while ($a <= 3) {
   $suma += $valores[$a];
   $a++;
}
echo "<p>La suma de los valores es: </p>"
.$suma;
echo "<br>";
/*----------------------------*/

}
 
?>
</body>
</html>