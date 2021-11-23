<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenar</title>
</head>
<body>
<form action="#" class="w3-container w3-card-4" method="post">
<input type="text" name="texto1" class="w3-input" placeholder="Colocar primer texto" required>
<input type="text" name="texto2" class="w3-input" placeholder="Colocar segundo texto" required>
<input type="submit" class="w3-button w3-khaki" name="concatenar">
 </form>
 <?php

if(isset($_POST['texto1']) && !empty($_POST['texto2']))

{
    $textoUno= $_POST["texto1"];
    $textoDos= $_POST["texto2"];
    concatenar($textoUno, $textoDos);
}else{
    echo "Ingrese dos Textos para concatenar";
}
function concatenar($t, $t2){
    $resultado= $t.$t2;
    echo $resultado;
}

?>
 
</body>
</html>