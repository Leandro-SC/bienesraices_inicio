<?php

require 'includes/funciones.php';

incluirTemplate('header');

?>


    <main class="contenedor seccion contenido-centrado">

        <h1>Casa en Venta fente al bosque</h1>

        <picture>
            <source loading="lazy" srcset="/bienesraicesbuild/img/destacada.webp" type="image/webp">
            <source loading="lazy" srcset="/bienesraicesbuild/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="/bienesraicesbuild/img/destacada.jpg" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <div class="icono-inferior">
                        <img loading="lazy" src="/bienesraicesbuild/img/icono_wc.svg" alt="icono baño">
                        <p>3</p>
                    </div>
                </li>
                <li>
                    <div class="icono-inferior">
                        <img loading="lazy" src="/bienesraicesbuild/img/icono_estacionamiento.svg"
                            alt="icono estacionamiento">
                        <p>1</p>
                    </div>

                </li>
                <li>

                    <div class="icono-inferior">
                        <img loading="lazy" src="/bienesraicesbuild/img/icono_dormitorio.svg" alt="icono dormitorios">
                        <p>3</p>
                    </div>

                </li>
            </ul>

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

    </main>

    <?php

    include './includes/templates/footer.php';
?>

