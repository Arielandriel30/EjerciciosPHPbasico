<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" class="w3-container w3-card-4" method="post">
<input type="number" name="valorn" class="w3-input" placeholder="Ingresar un númeror" required>
<input type="submit" class="w3-button w3-round-large w3-khaki" name="incrementar">
 </form>
 <?php
if(isset($_POST["valorn"])){
    $valorn= $_POST["valorn"];
   incrementar($valorn);
   
}else{
    echo "ingrese un valor";
}
function incrementar($v){
   $v++; 
echo $v;

}


?>
</body>
</html>