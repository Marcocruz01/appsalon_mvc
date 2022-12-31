<div class="barra">
    <p>Hola: <span><?php echo $nombre ?? ''; ?></span></p>
    <a class="btn-logout" href="/logout">Cerrar Sesión</a>
</div>


<?php if(isset($_SESSION['admin'])) { ?>
    <div class="barra-servicios">
        <a class="boton" href="/Admin">Ver Citas</a>
        <a class="boton" href="/servicios">Ver Servicios</a>
        <a class="boton" href="/servicios/crear">Añadir Servicio</a>
    </div>
<?php } ?>
