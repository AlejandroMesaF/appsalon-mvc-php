<h1 class="nombre-pagina">Nuevo Servicio</h1>
<p class="descripcion-pagina">LLena todos los datos del formulario</p>

<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php' ?>

    <input type="submit" class="boton" value="Actualizar Servicio">
</form>