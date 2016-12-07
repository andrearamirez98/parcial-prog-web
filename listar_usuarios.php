<?php
//incluir encabezado html
	require_once ('encabezado.php');
	require_once('conexion.php');
	$consulta = mysqli_query($conexion, "SELECT * FROM usuarios");
	$usuarios = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
//resibir variable consulta
if (isset($_GET['consulta']))
{
	$consulta = $GET['consulta'];
	if($consulta == 1)
	{
		?>
			<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
					<strong>Alerta</strong> el usuario fue actualizado con exito.
						
			</div>
		<?php 
	}
		else
	{
		?>
			<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
					<strong>Alerta</strong> El usuario no pudo ser actualizado 
		<?php
	}
}
//resibir variable eliminado
if (isset($_GET['eliminado']))
{
	$consulta = $GET['eliminado'];
	if($eliminado == 1)
	{
		?>
			<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
					<strong>Alerta</strong> el usuario fue eliminado con exito.
						
			</div>
		<?php 
	}
		else
	{
		?>
			<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
					<strong>Alerta</strong> El usuario no pudo ser eliminado.
			</div>
		<?php
	}
}
	//resibir la varible de sesion
	if (isset($_GET['login']))
	 {
		?>
		<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
					<strong>Alerta</strong> Bienvenido, has iniciado sesion.
			</div>
		<?php
	}
?>
<div class="container-fluid">
	<h2 class="text-center">usuario</h2>
	<a href="crear_usuario.php" class="btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Añadir usuario</a>
	<table class="table table-bordered table-striped">
		<tr>
			<th class="text-center">id</th>
			<th class="text-center">Nombre</th>
			<th class="text-center">Apellido</th
			<th class="text-center">Telefono</th>
			</tr>
		<?php foreach ($usuarios as $usuario): ?>
			<tr>
				<td class="text-center"><?php echo $usuario['id'];?></td>
				<td class="text-center"><?php echo $usuario['nombre']; ?></td>
				<td class="text-center"><?php echo $usuario['apellido']; ?></td>
			<td class="text-center"><?php echo $usuario['email']; ?></td>
				
				<td class="text-center"><?php echo $usuario['']; ?></td>
				<td class="text-center">
					<a href="ver_usuario.php?id='<?php $usuario['id'] ?>"  class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></a>
					<a href="editar_usuario.php?id='<?php $usuario['id'] ?>" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
					<a href="eliminar_usuario.php?id='<?php $usuario['id'] ?>" class="btn btn-danger" onclick="return confirm('esta seguro de eliminar este registro')" ><i class="fa fa-trash" aria-hidden="true"></i></a>
				</td>
			</tr>
		<?php endforeach;?>
			
	</table>
</div>
<?php
	//incluir pie de pagina
	require_once ('pie_pagina.php');
?>