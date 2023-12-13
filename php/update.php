<?php
//var_dump($_POST);
include 'crudFunctions.php';



//se obtienen los valores ingresados por el usuario
$id = $_POST['id'];

$nameC = $_POST['nameC'];

$email = $_POST['email'];

$pathology = $_POST['pathology'];

$observations = $_POST['observations'];

//ingresar registros en db
$respUpdate = updateUserFormById( $nameC,  $email, $pathology, $observations, $id);

if($respUpdate == true) {
    echo "true";
}else {
    echo "<p style='color:  #ec7063;font-size: 20px;font-weight: bold; margin: 20px;'>Datos incorrectos</p>";
}
