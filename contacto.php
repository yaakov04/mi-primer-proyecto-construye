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
                <form action="enviando_mensaje.php" method="POST">
                    <fieldset>
                        <legend>Formulario de contacto</legend>
                        <label for="nombre">Nombre</label>
                        <input name="nombre" type="text" id="nombre" placeholder="Tu nombre" required>

                        <label for="email">Correo Electrónico</label>
                        <input name="email"  type="email" id="email" placeholder="Tu correo electrónico" required>

                        <label for="telefono">Teléfono</label>
                        <input name="telefono" type="tel" id="telefono" placeholder="Tu teléfono" required>
                        <label for="asunto">Asunto</label>
                        <input name="asunto" type="text" id="asunto" placeholder="Asunto" required>
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="mensaje"></textarea>

                    </fieldset>
                    
                    <div class="botones ">
                        <input class="btn-formulario btn" type="submit" name="submit" value="Enviar">
                    </div>
                </form>
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
