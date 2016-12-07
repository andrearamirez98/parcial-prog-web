<?php
//incluir encabezado html
	require_once ('encabezado.php');

	// validar si las variables estan inicializadas

	if (isset($_POST['nombre'])
		&& isset($_POST['apellido'])
		&& isset($_POST['email'])
		&& isset($_POST['tipo_usuario'])
		&& isset($_POST['contrasena'])
		&& isset($_POST['contrasena2'])
		&& isset($_POST['telefono'])
		&& isset($_POST['direccion'])
		) 

	{
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$contrasena = $_POST['contrasena'];
		$contrasena2 = $_POST['contrasena2'];
		$telefono = $_POST['telefono'];

		//validar contrasena
		if($contrasena == $contrasena2)
		{
			$contrasena_enc = sha1($contrasena);
			require_once('conexion.php');
			$insertar = mysqli_query($conexion, "INSERT INTO usuarios(nombre, apellido, , telefono,  contrasena, ) VALUES('$nombre', '$apellido', '$telefono','$contrasena_enc)");
			$consulta = mysqli_affected_rows($conexion);
			if($consulta == 1)
			{
				?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
						<strong>Alerta</strong> el usuario fue registrado.
					
					</div>
				<?php 
			}
			else
			{
				?>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
						<strong>Alerta</strong> El usuario no pudo ser registrado.
					</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
				<strong>Alerta</strong> las contraseñas ingresadas no coincide
				
			</div>
			<?php
		}
	}
	
?>

<div class="container">
	<h2 class="text-center">Crear Nuevo usuario</h2>
	<div class="row">
		<div class="col-md-2"></div>
		<form action="crear_usuario.php" class="col-md-8" method="POST">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Ingrese Nombre" required="">
			</div>
			<div class="form-group">
				<label for="nombre">Apellido</label>
				<input type="text" name="apellido" class="form-control" placeholder="Ingrese Apellido" required="">
			</div>
			
			
			<div class="form-group">
				<label for="nombre">Contraseña</label>
				<input type="password" name="contrasena" class="form-control" placeholder="Ingrese contraseña" required="">
			</div>
			<div class="form-group">
				<label for="nombre">Repetir contraseña</label>
				<input type="password" name="contrasena2" class="form-control" placeholder="Ingrese contraseña de nuevo" required="">
			</div>
			<div class="form-group">
				<label for="nombre">Telefono</label>
				<input type="text" name="telefono" class="form-control" placeholder="Ingrese # de Telefono" required="">
			</div>
		
			<div class="text-center">
				<button type="submit" class="btn btn-primary">Crear usuario</button>
				<a href="crear_usuarios.php" class="btn btn-success">Volver Atrás</a>
				
			</div>
		</form>
	</div>
</div>
<?php
	//incluir pie de pagina
	require_once ('pie_pagina.php');
?>