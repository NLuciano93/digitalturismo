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
                    nombre_destino, precio, promocion, avatar_destino, id_provincia
                    )
					VALUES (
                        :nombre_destino, :precio, :promocion, :avatar_destino, :id_provincia
                        )
				");

				$stmt->bindValue(':nombre_destino', $destino->getNombre());

				$stmt->bindValue(':precio', $destino->getPrecio());

				$stmt->bindValue(':promocion', $destino->getPromocion());
				
				$stmt->bindValue(':avatar_destino', $destino->getAvatar());
				
				$stmt->bindValue(':id_provincia', $destino->getId_provincia());

				$stmt->execute();

				return true;

				// Agregar try ****

			}
		}