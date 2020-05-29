        <div class="menu-movil flex-container">
            <button id="hamburger">Menú <i class="fas fa-bars"></i></button>
        </div>

        <nav id="menu-movil" class="container flex-container <?php
	$archivo = basename($_SERVER['PHP_SELF']);
	$pagina = str_replace(".php", "", $archivo);
	if($pagina === 'contacto'){
		echo 'contacto-nav';
	}
?>">
            <a href="index.php">Inicio</a>
            <a href="nosotros.php">Nosotros</a>
            <a href="galeria.php">Galería</a>
            <a href="proyectos.php">Nuestros proyectos</a>
            <a href="servicios.php">Servicios</a>
            <a href="contacto.php">Contacto</a>
        </nav>  
    <!--.barra-->



