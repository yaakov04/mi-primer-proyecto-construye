<?php include 'inc/layouts/header.php'; ?>
<section class="container galeria-contenedor">

<h2>Galeria</h2>
    <div class="galeria">
        <div class="flex-container" id="galeria-container">
            <?php 
            try {
                //abrir conexion bd
                require_once('inc/funciones/conexion_bd.php');
                //consulta sql
                $sql = " SELECT * FROM `galeria` ";
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
<?php include 'inc/layouts/footer.php'; ?>