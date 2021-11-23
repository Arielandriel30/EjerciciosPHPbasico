<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Completo</title>
</head>
<body>
<form class="w3-container w3-card-4" action="#" method="post">
<input type="text" name="valor[]" class="w3-input" placeholder="Escriba su nombre " required><br>
<input type="text" name="valor[]" class="w3-input" placeholder="Escriba su apellido " required>
<select name="valor[]" >
    <option value="masculino">Masculino</option>
    <option value="femenino">Femenino</option>
</select><br>
<input type="submit"  class="w3-button w3-khaki " name="guardar">
 </form>
<?php
if(isset($_POST['valor'])){
    $valor=$_POST['valor'];
    include_once('clasenombrecompleto.php');
  // print_r ($valor);


}else {
    echo "ingrese sus datos";
}
?>
</body>
</html>