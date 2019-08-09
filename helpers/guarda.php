<?php
require('conexion.php'); // llama a verificar la conexion

session_start(); //requiere la verificacion para poder ingresar a la pagina. debe estar primero que todo con su apertura y cierre de php

$nombre =  $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$password = $_POST['pass'];

//si estan seteados los datos del form. realizo las consultas
if($nombre and $apellido and $email and $usuario and $password){



//guardo la consulta para insertar los datos en la bd
$consulta = "INSERT INTO usuarios(usr_nombre,usr_apellido,usr_email,usr_usuario,usr_password) VALUES('$nombre','$apellido','$email','$usuario', '$password')";

//ejecuto la consulta
$bd = $mysqli->query($consulta);

//cierro conexion
mysqli_close();

//mando a la web principal
header('Location: ../index.php');

}
else{
echo "Los datos enviados estan vacios";
}

?>