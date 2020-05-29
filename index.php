	<?php include 'inc/layouts/header.php'; ?>
    <div class="modal-container">
        <i class="close far fa-times-circle"></i>
        <div class="modal-img">
            <i id="anterior" class="fas fa-chevron-left"></i>
            <div class="modal-img-container">
                <img src="" alt="Modal" id="modal-img">
            </div>
            <i id="siguiente" class="fas fa-chevron-right"></i>
        </div>
    </div>
    <main class="container">
        <section class="nosotros">
            <h2>Sobre Nosotros</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, esse adipisci! Veritatis exercitationem repudiandae dolores officia animi a repellendus eveniet, sint unde sequi nemo error, earum, cumque quisquam nulla voluptatem! Lorem
                ipsum dolor sit amet, consectetur adipisicing elit. Repellendus expedita saepe soluta error repellat quos, illo maxime nesciunt cum reiciendis, debitis sapiente necessitatibus molestias asperiores! Illum alias fugiat numquam distinctio.</p>
        </section>
        <!--.nosotros-->
        <section class="servicios-container">
            <h2>Nuestros Servicios</h2>
            <div class="flex-container servicios">
                <div class="servicio">
                    <img src="img/pencil-ruler-solid.png" alt="">
                    <h3>Diseño Arquitectónico</h3>
                </div>
                <div class="servicio">
                    <img src="img/hotel-solid.png" alt="">
                    <h3>Calculo de Costos</h3>
                </div>
                <div class="servicio">
                    <img src="img/calculator-solid.png" alt="">
                    <h3>Construcción Habitacional</h3>
                </div>
            </div>
            <div class="botones flex-container">
                <a class="btn" href="servicios.php">Ver más</a>
                <a class="btn" href="contacto.php">Contáctanos</a>
            </div>
        </section>
        <!--Nuestros Servicios-->
        <section class="container galeria-contenedor">

        <h2>Galeria</h2>
            <div class="galeria">
                <div class="flex-container" id="galeria-container">
                    <?php 
                    try {
                        //abrir conexion bd
                        require_once('inc/funciones/conexion_bd.php');
                        //consulta sql
                        $sql = " SELECT * FROM `galeria` ORDER BY id DESC LIMIT 6 ";
                        $resultado = $conexion->query($sql);
                    } catch (\Exception $e) {
                        echo $e->getMessage();
                    } 
                   
                    while ( $galeria = $resultado->fetch_assoc()) { ?>
                        <div class="item"><img src="img_galeria/<?php echo $galeria['img']; ?>" alt=""></div>
                    <?php  }// end while ?>
                    <?php $conexion->close(); ?>
                   
                </div>
                <div class="botones flex-container">
                <a class="btn" href="galeria.php">Ver más</a>
                
            </div>
            </div>

        </section>
        <!--Galeria-->
    </main>

<?php include 'inc/layouts/footer.php'; ?>
