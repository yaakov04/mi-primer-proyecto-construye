<?php include 'inc/layouts/header.php'; ?>

    
    
    <main class="container">
        <section>
            <h2>Nuestros Proyectos</h2>
            <div id="proyectos-container" class="proyectos flex-container">
                <?php 
                try {                
                    //abrir conexion bd
                    require_once('inc/funciones/conexion_bd.php');
                    //consulta sql
                    $sql = " SELECT * FROM `proyectos` ";
                    $resultado = $conexion->query($sql);
                } catch (\Exception $e) {
                    echo $e->getMessage();
                }    
                while ($proyecto = $resultado->fetch_assoc()) {//while ?>
                
                    <div class="proyecto">
                        <a id="proyecto" href="img_proyectos/<?php echo $proyecto['img_proyecto']; ?>"><img src="img_proyectos/<?php echo $proyecto['img_proyecto']; ?>" alt="<?php echo $proyecto['titulo_proyecto']; ?>"></a>
                        <div class="proyecto-txt">
                            <p><?php echo $proyecto['titulo_proyecto']; ?></p>
                        </div>
                       
                            <p style="display:none;"><?php echo $proyecto['descripcion_proyecto']; ?></p>
                    </div>
                   

                <?php } //end while ?>
                <?php $conexion->close(); ?>
            </div><!--proyectos-container-->
        </section>

    </main>

<?php include 'inc/layouts/footer.php'; ?>
