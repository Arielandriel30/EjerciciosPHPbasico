<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<div class="w3-container w3-padding-large">';
    echo '<div class="w3-panel w3-orange">
    <h1 class="w3-opacity w3-center">Ariel Landriel</h1>
  </div>';
     echo '<div class="w3-row">';
    echo '<div class="w3-third w3-center w3-padding-large">';
    echo '<h2>Ejercicio 1</h2>';
    echo '<p class="w3-wide">Semáforo</p>';
include_once('Ejercicio1/semaforo.php');
echo '</div>';


echo '<div class="w3-third w3-center w3-padding-large">';
echo '<h2>Ejercicio 2</h2>';
echo '<p class="w3-wide">Binomio cuadrado perfecto</p>';
include_once('Ejercicio2/binomio.php');
echo '</div>';



echo '<div class="w3-third w3-center w3-padding-large">';
echo '<h2>Ejercicio 3</h2>';
echo '<p class="w3-wide"> Concatenar textos</p>';
include_once('Ejercicio3/concatenar.php');
echo '</div>';
echo '</div>';




echo '<div class="w3-row w3-center">';
echo '<div class="w3-third w3-padding-large">';
echo '<h2>Ejercicio 4</h2>';
echo '<p class="w3-wide">Incrementar</p>';
include_once('Ejercicio4/incrementar.php');
echo '</div>';


echo '<div class="w3-third w3-center w3-padding-large">';
echo '<h2>Ejercicio 5</h2>';
echo '<p class="w3-wide">Sumatoria</p>';
include_once('Ejercicio5/sumatoria.php');
echo '</div>';


echo '<div class="w3-third w3-center w3-padding-large">';
echo '<h2>Ejercicio 6</h2>';
echo '<p class="w3-wide"> Nombre completo</p>';
include_once('Ejercicio6/nombrecompleto.php');
echo '</div>';
echo '</div>';
echo '</div>';
?>
</body>
</html>