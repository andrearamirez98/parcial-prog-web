<?php
//incluir encabezado html
	require_once ('encabezado.php');

	// validar si las variables estan inicializadas

	if (isset($_POST['nombre_agenda'])
		&& isset($_POST['editorial'])
		&& isset($_POST['fecha_creacion'])
		&& isset($_POST['numero_paginas'])
		&& isset($_FILES['imagen_libro'])
		&& isset($_FILES['genero'])
		&& isset($_FILES['adjunto_libro'])
		&& isset($_POST['usuarios_id'])
		) 

	{
		$nombre_agenda= $_POST['nombre_agenda'];
		$apellido= $_POST['apellido'];
		$fecha_creacion = $_POST['fecha_creacion'];
		$telefono = $_POST['telefono'];
		$imagen_libro = $_FILES['imagen_agenda'][''];
		$usuarios_id = $_POST['id'];
		$agend= $_FILES['agend']['name'];
		$carpeta = "agend/";

		if(move_uploaded_file($_FILES['imagen_libro']['tmp_name'], $direccion))
		{
			require_once('conexion.php');
			$insertar = mysqli_query($conexion, "INSERT INTO agenda(nombre_agenda, apellido, fecha_creacion, ,telefono, imagen_agenda, genero, id) VALUES('$nombre_agenda', '$apellido', '$fecha_creacion', '$telefono', '$agend', $id)");
				$consulta = mysqli_affected_rows($conexion);
				if($consulta == 1)
				{
					?>
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
							<strong>Alerta</strong> El evento fue registrado 
					
						</div>
					<?php 
				}
				else
				{
					?>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
							<strong>Alerta</strong> El evento no pudo ser registrado.
						</div>
					<?php
				}
		}	
		else
		{
			?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
					<strong>Alerta</strong> El agjunto del libro no pudo ser procesado, intentelo de nuevo...
				</div>
			<?php
		}	
	}
	
?>

<div class="container">
	<h2 class="text-center">Añadir Nuevo evento</h2>
	<div class="row">
		<div class="col-md-2"></div>
		<form action="crear_sgenda.php" class="col-md-8" method="POST" enctype="  multipart/form-data">
			<div class="form-group">
				<label for="nombre_agenda">Nombre</label>
				<input type="text" name="nombre_agenda" class="form-control" placeholder="Ingrese Nombre del libro" required="">
			</div>
			<div class="form-group">
				<label for="apellido">Apellido</label>
				<input type="text" name="apellido" class="form-control" placeholder="Ingrese el apellido" required="">
			</div>
			<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
			<div class="form-group">
				<label for="nombre">Fecha creacion</label>
				<input type="date" name="fecha_creacion" class="form-control" placeholder="Ingrese fecha de creacion" required="">
			</div>
			<div class="form-group">
				<label for="nombre">Telefono</label>
				<input type="number" name="telefono" class="form-control" placeholder="Ingrese el telefono" required="">
			</div>
			
			<div class="form-group">
				<label for="nombre">Agend</label>
				<input type="file" name="agend" class="form-control" required="">
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-primary">Añadir agenda</button>
				<a href="libros.php" class="btn btn-success">Volver</a>
				
			</div>
		</form>
		</div>
	</div>
<?php
	//incluir pie de pagina
	require_once ('pie_pagina.php');
?>