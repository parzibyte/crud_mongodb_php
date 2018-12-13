<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD con MongoDB y PHP por @parzibyte</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" target="_blank" href="https://parzibyte.me/blog">Por Parzibyte</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo isset($_GET["q"]) && $_GET["q"] === "listar" ? "active": "" ?>">
        <a class="nav-link" href="?q=listar">Listar</a>
      </li>
      <li class="nav-item <?php echo isset($_GET["q"]) && $_GET["q"] === "agregar" ? "active": "" ?>">
        <a class="nav-link" href="?q=agregar">Agregar</a>
      </li>
      </li>
      <li class="nav-item <?php echo isset($_GET["q"]) && $_GET["q"] === "creditos" ? "active": "" ?>">
        <a class="nav-link" href="?q=creditos">Acerca de</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
