<?php
//para la conexion a la base de datos y envio de los datos

//1)recibimos todos los datos
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$edad_form = $_POST['edad'];
$correo_form = $_POST['correo'];
$motivo_form = $_POST['motivo'];
$mensaje_form = $_POST['mensaje'];

//server //usuario //contraseña //nombre base datos
$datos_db = mysqli_connect('localhost', 'root', 'po92ke14', 'phpintermedio') or exit ('No se puede conectar con la base de datos'); 

mysqli_query($datos_db, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', $edad_form,'$correo_form','$motivo_form','$mensaje_form');");

mysqli_close($datos_db);

header('Location: contacto.php?valorVuelta#contenido');
?>
