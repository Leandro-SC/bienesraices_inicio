<?php

require 'includes/funciones.php';

incluirTemplate('header');

?>


    <main class="contenedor seccion contenido-centrado">

        <h1>Nuestro Blog</h1>

        <!--Entrada Blog----->
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
                    <p>Escrito el <span>20/10/2023</span> por: <span>Admin</span></p>

                    <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales</p>
                </a>
            </div>
        </article>

        <!--Entrada Blog----->
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="/bienesraices/build/img/blog2.webp" type="image/webp">
                    <source src="/bienesraicesbuild/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">                        
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para decoración de tu hogar</h4>
                    <p>Escrito el <span>20/10/2023</span> por: <span>Admin</span></p>

                    <p>Maximiza el espacio en tu hogar con esta guía práctica</p>
                </a>
            </div>
        </article>

                <!--Entrada Blog----->
                <article class="entrada-blog">
                    <div class="imagen">
                        <picture>
                            <source src="/bienesraices/build/img/blog3.webp" type="image/webp">
                            <source src="/bienesraices/build/img/blog3.jpg" type="image/jpeg">
                            <img loading="lazy" src="/bienesraices/build/img/blog3.jpg" alt="Texto Entrada Blog">                        
                        </picture>
                    </div>
                    <div class="texto-entrada">
                        <a href="entrada.php">
                            <h4>Guía para decoración de tu hogar</h4>
                            <p>Escrito el <span>20/10/2023</span> por: <span>Admin</span></p>
        
                            <p>Maximiza el espacio en tu hogar con esta guía práctica</p>
                        </a>
                    </div>
                </article>

                        <!--Entrada Blog----->
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="/bienesraices/build/img/blog4.webp" type="image/webp">
                    <source src="/bienesraices/build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="/bienesraices/build/img/blog4.jpg" alt="Texto Entrada Blog">                        
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para decoración de tu hogar</h4>
                    <p>Escrito el <span>20/10/2023</span> por: <span>Admin</span></p>

                    <p>Maximiza el espacio en tu hogar con esta guía práctica</p>
                </a>
            </div>
        </article>

    </main>

    <?php

    include './includes/templates/footer.php';
?>