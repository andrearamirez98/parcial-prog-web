<?php
//incluir encabezado html
	require_once ('encabezado.php');
	$id = $_GET['id'];
	require_once('conexion.php');
		$consulta = mysqli_query($conexion, "SELECT * FROM libro WHERE id = $id");
		$libro = mysqli_fetch_array($consulta);
		if(mysqli_num_rows($consulta)):

?>
	<div class="container">
	<h2 class="text-center">Editar eveto<?php echo $agenda['nombre_agenda']." ". $agenda['apellido'] ?></h2>
	<div class="row">
		<div class="col-md-2"></div>
		<form action="editar_agenda_post.php" method="POST" class="col-md-8">
			<input type="hidden" name="id" value=" <?php echo $agenda['id']; ?>">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre_agenda" class="form-control" placeholder="Ingrese evento" required="" value="<?php echo $agenda['nombre']; ?>">
			</div>
			<div class="form-group">
				<label for="nombre">Apellido</label>
				<input type="text" name="apellido" class="form-control" placeholder="Ingrese editorial" required="" value="<?php echo $agenda['apellido']; ?>">
			</div>
			<div class="form-group">
				<label for="nombre">Fecha de creacion</label>
				<input type="email" name="fecha_creacion" class="form-control" placeholder="Ingrese fecha de creacion" required="" value="<?php echo $agenda['fecha_creacion']; ?>">
			</div>
			<div class="form-group">
				<label for="nombre">Telefono</label>
				<input type="text" name="Telefono" class="form-control" placeholder="Ingrese el telefono" required="" value="<?php echo $agenda['telefono']; ?>">
			</div>
	

			</div>
		</form>
	</div>
 </div>
<?php
	endif;

	//incluir pie de pagina
	require_once ('pie_pagina.php');
?>