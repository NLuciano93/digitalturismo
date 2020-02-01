<?php

	require_once 'clases/Destino.php';
	require_once 'clases/BaseDatos.php';
	require_once 'controladores/helpers.php';

	if ($_POST) {
		$destinoAlta = new Destino(
			$_POST['nombre'],
			$_POST['precio'], 
			$_POST['promocion'],
			$_POST['avatar'],
			$_POST['id_provincia']
		);

		$alta = BaseDatos::grabarDestino($destinoAlta);
	}

	$pageTitle = 'Alta DESTINO';
	//require_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title><?php echo $pageTitle; ?></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-10">
					<h2>Alta DESTINO</h2>
					<form method="post">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Nombre:</label>
									<input type="text" class="form-control" placeholder="Ej: Mina Clavero full " name="nombre">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Precio:</label>
									<input type="text" class="form-control" placeholder="80000" name="precio">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Promocion:</label>
									<input type="text" class="form-control" placeholder="50" name="promocion">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>avatar:</label>
									<input type="text" class="form-control" name="avatar" value="cataratasBote.jpg">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>id_provincia:</label>
									<input type="text" class="form-control" value="5" name="id_provincia">
								</div>
							</div>

							<div class="col-12 text-center">
								<button type="submit" class="btn btn-primary">GUARDAR</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php if (isset($alta)): ?>
				<div
					class="alert <?php echo $alta ? 'alert-success' : 'alert-danger'?>"
				>
					<?php echo $alta ? '¡Destino guardado con éxito!' : '¡No se pudo guardar el destino!' ?>
				</div>
			<?php endif; ?>
		</div>
	</body>
</html>
