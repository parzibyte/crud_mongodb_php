<div class="row">
    <div class="col">
        <h1>Contactos</h1>
        <a href="?q=agregar" class="btn btn-success">Agregar</a>
        <br>
        <br>
    </div>

</div>
<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>E-mail</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($cursorContactos as $contacto): ?>
                <tr>
                    <td><?php echo $contacto->nombre ?></td>
                    <td><?php echo $contacto->direccion ?></td>
                    <td><?php echo $contacto->correoElectronico ?></td>
                    <td>
                        <a class="btn btn-warning" href="?q=editar&id=<?php echo $contacto->_id ?>">Editar</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="?q=eliminar&id=<?php echo $contacto->_id ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
