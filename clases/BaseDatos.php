<?php

	require_once 'Conexion.php';

	abstract class BaseDatos
	{
        public static function grabarDestino(Destino $destino)
		{
            // global $connection; VERIFICAR 
            $link = Conexion::conectar();

			$stmt = $link->prepare("
					INSERT INTO destinos (
                    nombre_destino, precio, promocion, avatar_destino)
					VALUES (
                        :nombre_destino, :precio, :promocion, :avatar_destino)
				");

				$stmt->bindValue(':nombre_destino', $destino->getNombre());

				$stmt->bindValue(':precio', $destino->getPrecio());

				$stmt->bindValue(':promocion', $destino->getPromocion());
				
				$stmt->bindValue(':avatar_destino', $destino->getAvatar());
				
				$stmt->execute();

				return true;

				// Agregar try ****

		}

		public static function getTodosDestinos()
		{
			// global $connection; VERIFICAR 
			$link = Conexion::conectar();


			$stmt = $link->prepare("
				SELECT id_destino, nombre_destino, precio, promocion, avatar_destino, id_provincia
				FROM destinos
				ORDER BY nombre_destino;
			");

			$stmt->execute();

			$destinos = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$destinosObject = [];

			foreach ($destinos as $destino) {
				$finalDestino = new Destino(
					$destino['id_destino'],
					$destino['nombre_destino'], 
					$destino['precio'],
					$destino['promocion'],
					$destino['avatar_destino']
				);

				$destinosObject[] = $finalDestino;
			}

			return $destinosObject;
		}
	}
