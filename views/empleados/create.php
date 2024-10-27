<!-- views/empleos/create.php -->
<h2>Crear Nuevo Empleo</h2>
<form action="<?= base_url ?>empleos/store" method="POST">
    <label for="nombreEmpleo">Nombre del Empleo:</label>
    <input type="text" name="nombreEmpleo" required>

    <label for="descripcionEmpleo">Descripción:</label>
    <textarea name="descripcionEmpleo" required></textarea>

    <input type="submit" value="Crear Empleo">
</form>
