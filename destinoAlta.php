<?php

	require_once 'clases/Destino.php';
	require_once 'clases/BaseDatos.php';
	require_once 'controladores/helpers.php';

	if ($_POST) {
		$destinoAlta = new Destino(
			$_POST['nombre'],
			$_POST['precio'], 
			$_POST['promocion'],
			$_POST['avatar']
		);

		$alta = BaseDatos::grabarDestino($destinoAlta);
	}

	$pageTitle = 'Alta DESTINO';
	//require_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Turismo | Productos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleProductos.css">
    <link rel="stylesheet" href="css/style-login-registro.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Oswald:500|Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/67f61afa3e.js" crossorigin="anonymous"></script>
</head>

<body>

<div class="container-fluid">
<div class="row">
<div class="col-12 p-0 m-0">
    <div class="container-fluid contenedor-nav">
        
        <!-- Cabecera - barra navegadora -->
        <div class="row p-0 m-0">
          <?php  include_once('nav.php') ?>
        </div>
    </div>
</div>
</div>
</div>

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
