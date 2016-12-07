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
	<h2 class="text-center">Editar usuario<?php echo $usuario['nombre']." ". $usuario['apellido'] ?></h2>
	<div class="row">
		<div class="col-md-2"></div>
		<form action="editar_usuario_post.php" method="POST" class="col-md-8">
			<input type="hidden" name="id" value=" <?php echo $usuario['id']; ?>">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Ingrese Nombre" required="" value="<?php echo $usuario['nombre']; ?>">
			</div>
			<div class="form-group">
				<label for="nombre">Apellido</label>
				<input type="text" name="apellido" class="form-control" placeholder="Ingrese Apellido" required="" value="<?php echo $usuario['apellido']; ?>">
			</div>
			
			</div>
			<div class="form-group">
				<label for="nombre">Telefono</label>
				<input type="text" name="telefono" class="form-control" placeholder="Ingrese # de Telefono" required="" value="<?php echo $usuario['telefono']; ?>">
			</div>
		
			<div class="text-center">
				<button type="submit" class="btn btn-primary">Editar usuario</button>
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