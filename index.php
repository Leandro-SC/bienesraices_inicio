<?php


require 'includes/funciones.php';

$inicio = true;
incluirTemplate('header',$inicio);

?>

<main class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>

    <div class="iconos-nosotros">

        <!---Iconos--->

        <div class="icono">
            <img src="./build/img/icono1.svg" alt="icono de seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore tenetur quasi animi obcaecati ullam
                provident, nesciunt, aspernatur magnam ratione iste, delectus molestias magni laborum ipsam quae
                sint laudantium quibusdam ex.</p>
        </div>
        <div class="icono">
            <img src="./build/img/icono2.svg" alt="icono de dinero" loading="lazy">
            <h3>Ahorro</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore tenetur quasi animi obcaecati ullam
                provident, nesciunt, aspernatur magnam ratione iste, delectus molestias magni laborum ipsam quae
                sint laudantium quibusdam ex.</p>
        </div>
        <div class="icono">
            <img src="./build/img/icono3.svg" alt="icono de tiempo" loading="lazy">
            <h3>A tiempo</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore tenetur quasi animi obcaecati ullam
                provident, nesciunt, aspernatur magnam ratione iste, delectus molestias magni laborum ipsam quae
                sint laudantium quibusdam ex.</p>
        </div>
    </div>
</main>

<!--Sección para Anuncios---->
<section class="seccion contenedor">
    <h2>Casas y Depas en Venta</h2>

    <?php
        $limite = 3;
        include 'includes/templates/anuncios.php';
    ?>

</section>

<!---Seccion Contacto--->
<section class="imagen-contacto">

    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un aseosr se pondrá en contacto contigo a la brevedad</p>
    <a href="contacto.php" class="boton-anaranjado-inline">Contáctanos</a>

</section>

<div class="contenedor seccion seccion-inferior">

    <section class="blog">

        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="build/img/blog1.webp" type="image/webp">
                    <source src="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el Techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el <span>20/10/2023</span> por: <span>Admin</span></p>

                    <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales</p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="build/img/blog2.webp" type="image/webp">
                    <source src="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para decoración de tu hogar</h4>
                    <p class="informacion-meta">Escrito el <span>20/10/2023</span> por: <span>Admin</span></p>

                    <p>Maximiza el espacio en tu hogar con esta guía práctica</p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">

        <div class="testimonial">
            <blockquote>
                Un excelente lugar para vivir, maravillosa experiencia de compra y la casa cumple mis expectativas.
            </blockquote>
            <p>_ Leandro Silva</p>
        </div>
    </section>

</div>

<?php

include './includes/templates/footer.php';
?>