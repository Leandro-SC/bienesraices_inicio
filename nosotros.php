<?php

require 'includes/funciones.php';

incluirTemplate('header');

?>

<main class="contenedor seccion">

    <h1>Conoce Sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source src="./build/img/nosotros.webp" type="image/webp">
                <source src="./build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="./build/img/nosotros.jpg" alt="Sobre Nosotros">

            </picture>
        </div>

        <div class="texto-nosotros">


            <blockquote>25 Años de Experiencia</blockquote>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eveniet aliquid dolorem veniam. Fugiat, nesciunt
                dolores deserunt rerum magni adipisci provident pariatur, illum totam ipsum nemo ullam quibusdam saepe
                beatae.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae explicabo repellendus reprehenderit
                doloribus consectetur illum ullam, accusamus veniam itaque, qui exercitationem minima officia delectus!
                Eveniet perspiciatis totam nihil libero veniam.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam reiciendis dolores animi nemo iste facilis,
                atque accusantium velit consequuntur incidunt tempora, fuga hic, repudiandae deleniti. Quos excepturi
                aliquid dicta exercitationem.

            </p>

            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quo numquam. Molestiae iste inventore dicta
                necessitatibus mollitia excepturi veniam? Eaque quo magnam accusamus dolore odit rerum nobis adipisci
                voluptatibus unde.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati saepe voluptates ipsam maiores ut natus
                nobis nemo unde molestias laudantium eveniet at, deleniti cumque architecto quam, aperiam tenetur illo
                necessitatibus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptatibus numquam ut veniam totam?
                Exercitationem, repudiandae. Impedit deleniti doloribus dolor. Cupiditate dolorem quasi natus possimus quae
                consectetur, reiciendis vel iusto.</p>

        </div>
    </div>

</main>

<section class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>

    <div class="iconos-nosotros">

        <!---Iconos--->

        <div class="icono">
            <img src="/bienesraices/build/img/icono1.svg" alt="icono de seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore tenetur quasi animi obcaecati ullam
                provident, nesciunt, aspernatur magnam ratione iste, delectus molestias magni laborum ipsam quae
                sint laudantium quibusdam ex.</p>
        </div>
        <div class="icono">
            <img src="/bienesraices/build/img/icono2.svg" alt="icono de dinero" loading="lazy">
            <h3>Ahorro</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore tenetur quasi animi obcaecati ullam
                provident, nesciunt, aspernatur magnam ratione iste, delectus molestias magni laborum ipsam quae
                sint laudantium quibusdam ex.</p>
        </div>
        <div class="icono">
            <img src="/bienesraices/build/img/icono3.svg" alt="icono de tiempo" loading="lazy">
            <h3>A tiempo</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore tenetur quasi animi obcaecati ullam
                provident, nesciunt, aspernatur magnam ratione iste, delectus molestias magni laborum ipsam quae
                sint laudantium quibusdam ex.</p>
        </div>
    </div>
</section>

<?php

include './includes/templates/footer.php';
?>