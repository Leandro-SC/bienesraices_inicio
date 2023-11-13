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

    <div class="contenedor-anuncios">
        <div class="anuncios">

            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p class="animacion-parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolorum aliquam ipsam?
                    Obcaecati atque repellendus, animi nesciunt dolorem officia, nihil aspernatur eos ducimus
                    architecto odio assumenda similique, ab commodi perferendis.</p>
                <p class="precio">$3000000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <div class="icono-inferior">
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="icono baño">
                            <p>3</p>
                        </div>
                    </li>
                    <li>
                        <div class="icono-inferior">
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>1</p>
                        </div>

                    </li>
                    <li>

                        <div class="icono-inferior">
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
                            <p>3</p>
                        </div>

                    </li>
                </ul>

                <!---Enlace para propiedad ------>
                <a href="anuncio.html" class="boton boton-anaranjado">
                    Ver Propiedad
                </a>
            </div> <!----Contenido Anuncios-------->
        </div> <!-------Anuncios------>

        <div class="anuncios">

            <picture>
                <source srcset="build/img/anuncio2.webp" type="image/webp">
                <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa de Lujo Moderno</h3>
                <p class="animacion-parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolorum aliquam ipsam?
                    Obcaecati atque repellendus, animi nesciunt dolorem officia, nihil aspernatur eos ducimus
                    architecto odio assumenda similique, ab commodi perferendis.</p>
                <p class="precio">$3500000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <div class="icono-inferior">
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="icono baño">
                            <p>3</p>
                        </div>
                    </li>
                    <li>
                        <div class="icono-inferior">
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>1</p>
                        </div>

                    </li>
                    <li>

                        <div class="icono-inferior">
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
                            <p>3</p>
                        </div>

                    </li>
                </ul>

                <!---Enlace para propiedad ------>
                <a href="anuncio.html" class="boton boton-anaranjado">
                    Ver Propiedad
                </a>
            </div> <!----Contenido Anuncios-------->
        </div> <!-------Anuncios------>

        <div class="anuncios">

            <picture>
                <source srcset="build/img/anuncio3.webp" type="image/webp">
                <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa con Alberca</h3>
                <p class="animacion-parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolorum aliquam ipsam?
                    Obcaecati atque repellendus, animi nesciunt dolorem officia, nihil aspernatur eos ducimus
                    architecto odio assumenda similique, ab commodi perferendis.</p>
                <p class="precio">$4000000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <div class="icono-inferior">
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="icono baño">
                            <p>3</p>
                        </div>
                    </li>
                    <li>
                        <div class="icono-inferior">
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>1</p>
                        </div>

                    </li>
                    <li>

                        <div class="icono-inferior">
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
                            <p>3</p>
                        </div>

                    </li>
                </ul>

                <!---Enlace para propiedad ------>
                <a href="anuncio.html" class="boton boton-anaranjado">
                    Ver Propiedad
                </a>
            </div> <!----Contenido Anuncios-------->
        </div> <!-------Anuncios------>
    </div> <!-----Contenedor Anuncios-------->

</section>

<!---Seccion Contacto--->
<section class="imagen-contacto">

    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un aseosr se pondrá en contacto contigo a la brevedad</p>
    <a href="contacto.html" class="boton-anaranjado-inline">Contáctanos</a>

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
                <a href="entrada.html">
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
                <a href="entrada.html">
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