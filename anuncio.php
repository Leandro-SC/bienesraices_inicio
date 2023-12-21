<?php

require 'includes/funciones.php';
incluirTemplate('header');

$id = $_GET['id'] ?? null;
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /');
}

//Importar la conexion
require __DIR__ . '/includes/config/database.php';

$db = conectarDB();

//Consultar
$query = "SELECT * FROM propiedades WHERE id = {$id}";

//Obtener resultado
$resultado = mysqli_query($db, $query);

if (!$resultado ->num_rows) {
    header('Location: /bienesraices/index.php');
}

$propiedad = mysqli_fetch_assoc($resultado);

?>

<main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad['titulo'] ?></h1>

        <picture>
            <img loading="lazy" src="./imagenes/<?php echo $propiedad['imagen'] ?>" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio"><?php echo $propiedad['precio'] ?></p>

            <ul class="iconos-caracteristicas">
                <li>
                    <div class="icono-inferior">
                        <img loading="lazy" src="./build/img/icono_wc.svg" alt="icono baño">
                        <p><?php echo $propiedad['wc'] ?></p>
                    </div>
                </li>
                <li>
                    <div class="icono-inferior">
                        <img loading="lazy" src="./build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p><?php echo $propiedad['estacionamiento'] ?></p>
                    </div>

                </li>
                <li>

                    <div class="icono-inferior">
                        <img loading="lazy" src="./build/img/icono_dormitorio.svg" alt="icono dormitorios">
                        <p><?php echo $propiedad['habitaciones'] ?></p>
                    </div>

                </li>
            </ul>

            <p><?php echo $propiedad['descripcion'] ?></p>

        </div>

</main>

<?php

include './includes/templates/footer.php';
//Cerrar conexion
mysqli_close($db);
?>