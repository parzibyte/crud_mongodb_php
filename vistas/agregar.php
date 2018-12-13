<div class="row">
    <div class="col">
        <h1>Agregar</h1>
    </div>
</div>
<div class="row">
    <div class="col">
    <form method="POST" action="?q=guardar">
        <div class="form-group">
            <label for="nombre">Nombre completo</label>
            <input required type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del contacto">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input required type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección del contacto">
        </div>
        <div class="form-group">
            <label for="correoElectronico">Correo electrónico</label>
            <input required type="email" class="form-control" id="correoElectronico" name="correoElectronico" placeholder="Dirección del contacto">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
</div>
