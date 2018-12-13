<?php
class ContactosModel
{
    private static function obtenerBaseDeDatos()
    {
        $host = "127.0.0.1";
        $puerto = "27017";
        $usuario = rawurlencode("parzibyte");
        $pass = rawurlencode("hunter2");
        $nombreBD = "agenda";
        # Crea algo como mongodb://parzibyte:hunter2@127.0.0.1:27017/agenda
        $cadenaConexion = sprintf("mongodb://%s:%s@%s:%s/%s", $usuario, $pass, $host, $puerto, $nombreBD);
        $cliente = new MongoDB\Client($cadenaConexion);
        return $cliente->selectDatabase($nombreBD);
    }

    /**
     * @param $contacto Contacto: un objeto de la clase Contacto
     * @return bool indicando si la inserción fue correcta
     */
    public static function insertar($contacto)
    {
        $baseDeDatos = self::obtenerBaseDeDatos();
        # Acceder a la colección contactos
        $coleccion = $baseDeDatos->contactos;
        $resultado = $coleccion->insertOne([
            "nombre" => $contacto->getNombre(),
            "direccion" => $contacto->getDireccion(),
            "correoElectronico" => $contacto->getCorreoElectronico(),
        ]);
        return $resultado->getInsertedCount() === 1;
    }

    public static function obtenerPorId($id)
    {
        $baseDeDatos = self::obtenerBaseDeDatos();
        $coleccion = $baseDeDatos->contactos;
        return $coleccion->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
    }

    public static function obtenerTodos()
    {
        $baseDeDatos = self::obtenerBaseDeDatos();
        $coleccion = $baseDeDatos->contactos;
        return $coleccion->find(); // Sin criterio de búsqueda
    }

    public static function actualizar($id, $contacto)
    {
        echo "id => $id";
        $baseDeDatos = self::obtenerBaseDeDatos();
        $coleccion = $baseDeDatos->contactos;
        $resultado = $coleccion->updateOne(
            // El criterio, algo así como where
            ["_id" => new MongoDB\BSON\ObjectId($id)],
            // Nuevos valores
            [
                '$set' => [
                    "nombre" => $contacto->getNombre(),
                    "direccion" => $contacto->getDireccion(),
                    "correoElectronico" => $contacto->getCorreoElectronico(),
                ],
            ]
        );
        # Recuerda que puedes ver a cuántos afectó con $resultado->getModifiedCount()
        return true;
    }

    public static function eliminar($id)
    {
        $baseDeDatos = self::obtenerBaseDeDatos();
        $coleccion = $baseDeDatos->contactos;
        $resultado = $coleccion->deleteOne(
            // El criterio, algo así como where
            ["_id" => new MongoDB\BSON\ObjectId($id)]
        );
        return $resultado->getDeletedCount() === 1;
    }
}
