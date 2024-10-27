<h1>Lista de Empleos</h1>
<?php
require_once 'vendor/autoload.php';
require_once 'config.php';
?>
<!-- Botón para agregar un nuevo empleo -->
<a href="<?= base_url ?>Empleos/create" class="button button-small">Crear empleo</a>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre del Empleo</th>
            <th>Descripción</th>
            <th>Acciones</th> 
        </tr>
    </thead>
    <tbody>
        <?php if ($empleos && $empleos->num_rows > 0): ?>
            <?php while ($empleo = $empleos->fetch_object()): ?>
                <tr>
                    <td><?= $empleo->id ?></td>
                    <td><?= $empleo->nombreEmpleo ?></td>
                    <td><?= $empleo->descripcionEmpleo ?></td>
                    <td>
                        <!-- Botón para editar -->
                      <a href="<?= base_url ?>empleos/editar&id=<?= $empleo->id ?>" class="btn btn-outline-primary">Editar</a>

                        <!-- Botón para eliminar -->
                        <a href="<?= base_url ?>empleos/delete&id=<?= $empleo->id ?>" class="btn btn-outline-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este empleo?');">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No hay empleos registrados</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
