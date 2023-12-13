<?php
//var_dump($_POST);
include 'crudFunctions.php';



//se obtienen los valores ingresados por el usuario

$nameC = $_POST['nameC'];

$email = $_POST['email'];

$pathology = $_POST['pathology'];

$observations = $_POST['observations'];

//ingresar registros en db
$respInst = insertUserForm( $nameC,  $email, $pathology, $observations);

if($respInst == true) {
  echo "<p style='color: var(--primary-color);font-size: 20px;font-weight: bold; margin: 20px;'>Registro insertado correctamente</p>";
}
