<div class="row">
    <div class="col">
        <h1>Editar</h1>
    </div>
</div>
<div class="row">
    <div class="col">
    <form method="POST" action="?q=guardarCambios">
        <input type="hidden" value="<?php echo $contacto->_id ?>" name="id">
        <div class="form-group">
            <label for="nombre">Nombre completo</label>
            <input value="<?php echo $contacto->nombre; ?>" required type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del contacto">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input value="<?php echo $contacto->direccion; ?>" required type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección del contacto">
        </div>
        <div class="form-group">
            <label for="correoElectronico">Correo electrónico</label>
            <input value="<?php echo $contacto->correoElectronico; ?>" required type="email" class="form-control" id="correoElectronico" name="correoElectronico" placeholder="Dirección del contacto">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
</div>
