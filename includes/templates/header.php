<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bienesraices/build/css/app.css">
    <title>Bienes Raices</title>
</head>

<body>

    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">

                <a href="/bienesraices/index.php">
                    <img src="build/img/logo.svg" alt="logo de Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="icono menú responsivo">
                </div>

                <div class="derecha">

                    <img src="build/img/dark-mode.svg" alt="boton para cambiar tema oscuro" class="dark-mode-boton">

                    <nav class="navegacion">

                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>

            </div> <!----Cierre de la barra-->


            <?php 
                if($inicio) { ?>

                    <h1>Venta de Casas y Departamentos</h1>
           <?php } ?>
        </div>
    </header>



























