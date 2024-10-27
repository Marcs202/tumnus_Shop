<h1>Editar Empleo</h1>
<form action="<?= base_url ?>Empleos/update" method="POST">
    <input type="hidden" name="id" value="<?= $empleo->id ?>"> <!-- Campo oculto para el ID -->

    <label>Nombre del Empleo</label>
    <input type="text" name="nombreEmpleo" value="<?= $empleo->nombreEmpleo ?>" required><br>

    <label>Descripción</label>
    <textarea name="descripcionEmpleo" required><?= $empleo->descripcionEmpleo ?></textarea><br>

    <button type="submit">Actualizar</button>
</form>
