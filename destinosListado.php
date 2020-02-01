<?php
	require_once 'clases/Destino.php';
	require_once 'clases/BaseDatos.php';
	require_once 'controladores/helpers.php';

	$destinos = BaseDatos::getTodosDestinos();

	$pageTitle = 'Listado DESTINOS';
?>

		<div class="container">
			<div class="row">
				<div class="col-12">
					<table class="table table-striped">
						<thead class="thead-dark">
			    			<tr>
								<th scope="col">ID</th>
								<th scope="col">Nombre</th>
								<th scope="col">Precio</th>
								<th scope="col">Promocion</th>
								<th scope="col">Avatar</th>
			    			</tr>
			  			</thead>
			  			<tbody>
							<?php foreach ($destinos as $destino): ?>
								<tr>
									<th scope="row"><?php echo $destino->getnombre(); ?></th>
									<td><?php echo $destino->getPrecio(); ?></td>
									<td><?php echo $destino->getPromocion(); ?></td>
									<td><?php echo $destino->getAvatar(); ?></td>
							
								</tr>
							<?php endforeach; ?>
			  			</tbody>
					</table>
				</div>
			</div>
		</div>

	</body>
</html>
