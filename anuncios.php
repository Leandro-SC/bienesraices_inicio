<?php

require 'includes/funciones.php';

incluirTemplate('header');

?>


<main class="contenedor seccion">

    <!--Sección para Anuncios---->
    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        <?php
        $limite = 10;
        include 'includes/templates/anuncios.php';
        ?>

    </section>

</main>

<?php

include './includes/templates/footer.php';
?>