<?php 
if (count($_POST) > 0) {
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);;
    $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);;
    $asunto = filter_var($_POST['asunto'], FILTER_SANITIZE_STRING);;
    $mensaje = filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING);;
    
    try {
       // echo $nombre;
        require_once('inc/funciones/conexion_bd.php');
        
        $stmt = $conexion->prepare("INSERT INTO mensajes (nombre, email, telefono, asunto, mensaje) VALUES (?,?,?,?,?)");
        
        $stmt->bind_param("sssss", $nombre, $email, $telefono, $asunto, $mensaje);
        hola();
        $stmt->execute();
        $stmt->close();
        $conexion->close();
        header('location: enviando_mensaje.php?exitoso=true');
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construye</title>
    <script src="https://kit.fontawesome.com/471047becf.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Abel|Barlow+Condensed:400,600|Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <header class="barra  no-fixed margin-header">
        <div class="header-contacto flex-container container">
            <div class="contacto-logo hero-txt">
                <a href="index.php">
                    <h1>Construye</h1>
                </a>
                <p>Construcción y diseño arquitectónico</p>
            </div>
            <div class="contacto-barra " id="contacto-barra">
<?php		include_once 'inc/layouts/barra.php'; ?>
            </div>
        </div>
    </header>
    <!--.barra-->

    <main class="main-contacto container">
        <h2>Contáctanos</h2>
        <div class="contacto-container flex-container">
            <div class="formulario">
            <?php 
            
                if (isset($_GET['exitoso'])) {
                    if ($_GET['exitoso'] ===  'true') {
                        echo '<h3 style="font-size: 3.2rem; font-family: var(--encabezado); font-weight: 400;" >Mensaje Enviado</h3>';
                    }
                }else{
                    echo '<h3 style="font-size: 3.2rem; font-family: var(--encabezado); font-weight: 400;">No se ha enviado ningún mensaje</h3>';
                }

                ?>
            </div>
            <div class="contacto-info-container">
                <h3>Información de contacto</h3>
                <div class="contacto-info flex-container">
                    <p class="mail">
                        <i class="fas fa-envelope"></i> <a href="mailto:contacto@construyefake.com">contacto@construye.com</a>
                    </p>
                    <p class="tel">
                        <i class="fas fa-phone-alt"></i> <a href="tel:+5218112345678">8112345678</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
    
<?php include 'inc/layouts/footer.php'; ?>