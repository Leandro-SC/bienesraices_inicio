<?php

//Importar la conexion
require __DIR__ . '/../config/database.php';
$db = conectarDB();
//Consultar
$query = "SELECT * FROM propiedades LIMIT {$limite}";

//Obtener resultado
$resultado = mysqli_query($db, $query);


?>


<div class="contenedor-anuncios">
    <?php while ($propiedad = mysqli_fetch_assoc($resultado)) : ?>


        <div class="anuncios">

            <picture>
                <img loading="lazy" src="./imagenes/<?php echo $propiedad['imagen'] ?>" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3><?php echo $propiedad['titulo'] ?></h3>
                <p class="animacion-parrafo"><?php echo $propiedad['descripcion'] ?></p>
                <p class="precio"><?php echo $propiedad['precio'] ?></p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <div class="icono-inferior">
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="icono baño">
                            <p><?php echo $propiedad['wc'] ?></p>
                        </div>
                    </li>
                    <li>
                        <div class="icono-inferior">
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p><?php echo $propiedad['estacionamiento'] ?></p>
                        </div>

                    </li>
                    <li>

                        <div class="icono-inferior">
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
                            <p><?php echo $propiedad['habitaciones'] ?></p>
                        </div>

                    </li>
                </ul>

                <!---Enlace para propiedad ------>
                <a href="anuncio.php?id=<?php echo $propiedad['id'] ?>" class="boton boton-anaranjado">
                    Ver Propiedad
                </a>
            </div> <!----Contenido Anuncios-------->
        </div> <!-------Anuncios------>
    <?php endwhile; ?>
</div> <!-----Contenedor Anuncios-------->


<?php

//Cerrar conexion
mysqli_close($db);

?>