<?php

$nombre = $_POST['nomre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$id = $_POST['id'];

require_once('configuracion.php');
require_once('conexion.php');

//consulta a la base de datos para ediar un usuario
$editar = mysqli_query($conexion, "UPDATE usuario SET nombre = '$nombre', apellido = '$apellido' = $telefono = '$telefono', direccion = '$direccion' WHERE id = '$id' ");

$consulta = mysqli_affected_rows($conexion);
//redirigir a la pagina listar usuario
header("lacation: listar_usuarios.php?consulta=".$consulta);


?>

