<?php
//incluir encabezado html
	require_once ('encabezado.php');
	
	require_once('conexion.php');

	$consulta = mysqli_query($conexion, "SELECT * FROM agenda");
	$libros = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
?>
<div class="container-fluid">
	<h2 class="text-center"></h2>
	<a href="crear_agenda.php" class="btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Añedir nuevo evento a la agenda</a>
	<table class="table table-bordered table-striped">
		<tr>
			<th class="text-center">id</th>
			<th class="text-center">Nombre</th>
			<th class="text-center">Apellido</th>
			<th class="text-center">Fecha creacion</th>
			<th class="text-center">Telefono</th>
		</tr>

		<table class="table table-bordered table-striped">
		<tr>
			<th class="text-center">id</th>
			<th class="text-center">Hora</th>
			<th class="text-center">Fecha</th>
			<th class="text-center">Lugar</th>
			<th class="text-center">Usuario_id</th>
		</tr>
		<?php foreach ($agenda as $agenda): ?>
			<tr>
				<td class="text-center"><?php echo $agenda['id'];?></td>
				<td class="text-center"><?php echo $agenda	['nombre_agenda']; ?></td>
				<td class="text-center"><?php echo $agenda['apellido']; ?></td>
				<td class="text-center"><?php echo $agenda['fecha_creacion']; ?></td>
				<td class="text-center"><?php echo $agenda['telefono']; ?></td>
				<td class="text-center"><img src="agend/<?php echo $agenda['agend'];?>" class="img-responsive" width="10%" >
				</td>
				<td class="text-center">
					<a href="ver_agenda.php?id='<?php $agenda['id'] ?>"  class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></a>
					<a href="editar_agenda.php?id='<?php $agendalibro['id'] ?>" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
					<a href="eliminar_agenda.php?id='<?php $agenda['id'] ?>" class="btn btn-danger" onclick="return confirm('¿Desea eliminar el evento?')" ><i class="fa fa-trash" aria-hidden="true"></i></a>
				</td>
			</tr>
		<?php endforeach;?>
			
	</table>
</div>
<?php
	//incluir pie de pagina
	require_once ('pie_pagina.php');
?>