<?php

$nombre_agenda = $_POST['nomre_libro'];
$apellido = $_POST['apellido'];
$fecha_creacion = $_POST['fecha_creacion'];
$numero_paginas = $_POST['telefono']
$id = $_POST['id'];

require_once('configuracion.php');
require_once('conexion.php');

//consulta a la base de datos para ediar un usuario
$editar = mysqli_query($conexion, "UPDATE libro SET nombre_agenda = '$nombre_libro', telefono = '$telefono
	', fecha_creacion = '$fecha_creacion', telefono = '$telefono' =  WHERE id = '$id' ");

$consulta = mysqli_affected_rows($conexion);
//redirigir a la pagina listar usuario
header("lacation: libros.php?consulta=".$consulta);


?>
