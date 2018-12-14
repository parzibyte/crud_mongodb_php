<?php
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/Contacto.php";
require_once __DIR__ . "/ContactosModel.php";
$pagina = "listar";
if (isset($_GET["q"])) {
    $pagina = $_GET["q"];
}
switch ($pagina) {
    case "creditos":
        include_once __DIR__ . "/vistas/encabezado.php";
        include_once __DIR__ . "/vistas/creditos.php";
        include_once __DIR__ . "/vistas/pie.php";
        break;
    case "listar":
        $cursorContactos = ContactosModel::obtenerTodos();
        include_once __DIR__ . "/vistas/encabezado.php";
        include_once __DIR__ . "/vistas/listar.php";
        include_once __DIR__ . "/vistas/pie.php";
        break;
    case "agregar":
        include_once __DIR__ . "/vistas/encabezado.php";
        include_once __DIR__ . "/vistas/agregar.php";
        include_once __DIR__ . "/vistas/pie.php";
        break;
    case "editar":
        if (!isset($_GET["id"])) {
            exit("No hay id");
        }

        $contacto = ContactosModel::obtenerPorId($_GET["id"]);
        include_once __DIR__ . "/vistas/encabezado.php";
        include_once __DIR__ . "/vistas/editar.php";
        include_once __DIR__ . "/vistas/pie.php";
        break;
    case "guardar":
        $contacto = new Contacto($_POST["nombre"], $_POST["direccion"], $_POST["correoElectronico"]);
        $resultado = ContactosModel::insertar($contacto);
        if ($resultado) {
            header("Location: ?q=listar");
            exit;
        } else {
            echo "Error al insertar, intenta más tarde";
        }
        break;
    case "guardarCambios":
        $contacto = new Contacto($_POST["nombre"], $_POST["direccion"], $_POST["correoElectronico"]);
        $id = $_POST["id"];
        $resultado = ContactosModel::actualizar($id, $contacto);
        if ($resultado) {
            header("Location: ?q=listar");
            exit;
        } else {
            echo "Error al actualizar, intenta más tarde";
        }
        break;
    case "eliminar":
        if (!isset($_GET["id"])) {
            exit("No hay id");
        }
        $id = $_GET["id"];
        $resultado = ContactosModel::eliminar($id);
        if ($resultado) {
            header("Location: ?q=listar");
            exit;
        } else {
            echo "Error al eliminar, intenta más tarde";
        }
        break;
}
