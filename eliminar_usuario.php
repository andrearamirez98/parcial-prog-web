<?php
	$id = $GET['id'];
	require_once('conexion.php');
$eliminar = mysql_query($conexion, "DELETE FROM usuarios WHERE id = '$id'");
$eliminado = mysqli_affected_rows($conexion);
header('location: listar_usuarios.php?eliminado'.$eliminado);
?>