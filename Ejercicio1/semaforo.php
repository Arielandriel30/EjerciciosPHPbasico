<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semáforo</title>
</head>
<body>
 <form class="w3-container w3-card-4" action="#" method="post">
<input type="text" name="txtcolor" class="w3-input" placeholder="Colocar un color" required>
<input type="submit" class="w3-button w3-khaki" name="comprobar">
 </form>   
 <?php


if(isset($_POST["txtcolor"])){
    $txtcolor= $_POST["txtcolor"];
    semaforo($txtcolor);
   //semaforoDos($txtcolor);
}else{
    echo "ingrese un color";
}

function semaforo($c) {
 if($c=="rojo"){
     $estado="Frene!!";
}elseif($c=="amarillo"){
    $estado="Precaucion!!";
}elseif($c=="verde"){
    $estado="Avance!!";
}else
  
   $estado="Estado desconocido";

echo $estado;
}

///////////////////////////
/*
function semaforoDos($c){
switch($c)
    {
    case ($c =="rojo"):
    echo "Frene!!";
    break;
 
    case ($c=="amarillo"):
    echo "Precaución";
    break;
 
    case ($c == "verde"):
    echo "Avance!";
    break;
    default:
    echo "Estado desconocido";
   
    }
}*/

?>
</body>
</html>