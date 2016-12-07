<?php
//incluir encabezado html
	require_once ('encabezado.php');
	$id = $_GET['id'];
	require_once('conexion.php');
		$consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id = $id");
		$usuario = mysqli_fetch_array($consulta);
		if(mysqli_num_rows($consulta)):

?>
	<div class="container">
	<h2 class="text-center">Detalle usuario<?php echo $usuario['nombre']." ". $usuario['apellido'] ?></h2>
	<div class="row">
		<div class="col-md-2"></div>
		<form  class="col-md-8">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="from-control" placeholder="Ingrese Nombre" required="" readonly value="<?php echo $usuario['nombre']; ?>">
			</div>
			<div class="form-group">
				<label for="nombre">Apellido</label>
				<input type="text" name="apellido" class="from-control" placeholder="Ingrese Apellido" required="" readonly value="<?php echo $usuario['apellido']; ?>">>
			</div>
		
			<div class="form-group">
				<label for="nombre">Telefono</label>
				<input type="text" name="telefono" class="from-control" placeholder="Ingrese # de Telefono" required="" readonly value="<?php echo $usuario['telefono']; ?>">>
			</div>
			<div class="form-group">
				<label for="nombre">Dirección</label>
				<input type="text" name="direccion" class="from-control" placeholder="Ingrese su Dirección" required="" readonly value="<?php echo $usuario['direccion']; ?>">>
			</div>
			<div class="text-center">
				<a href="listar_usuarios.php" class="btn btn-success">Volver Atrás</a>
				
			</div>
		</form>
	</div>
</div>
<?php
	endif;

	//incluir pie de pagina
	require_once ('pie_pagina.php');
?>