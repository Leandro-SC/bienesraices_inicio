<?php

//Funciones php
require '../includes/funciones.php';
$auth = isLogin();

if (!$auth) {
    header('Location: /bienesraices/index.php');
}

//Importar conexion
require '../includes/config/database.php';
$bd = conectarDB();

//Escribir query
$query_propiedades = "SELECT * FROM propiedades LIMIT 10";

//consultar bd
$resultado_propiedades = mysqli_query($bd, $query_propiedades);

//Muestra mensaje condicional
$resultado = $_GET['resultado'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if ($id) {
        //Eliminar el archivo
        $query_propiedades_archivo = "SELECT imagen FROM propiedades WHERE id={$id}";
        $resultado_imagen = mysqli_query($bd, $query_propiedades_archivo);
        $propiedad_imagen = mysqli_fetch_assoc($resultado_imagen);

        // Eliminar en la base de datos
        $query = "DELETE FROM propiedades WHERE id = ?";

        try {
            $stmt = mysqli_prepare($bd, $query);

            if (!$stmt) {
                throw new Exception("Error en la preparación de la sentencia: " . mysqli_error($bd));
            }

            mysqli_stmt_bind_param($stmt, "i", $id);

            $resultado = mysqli_stmt_execute($stmt);

            if ($resultado) {
                // Redireccionar al usuario
                header('Location: /bienesraices/admin/index.php?resultado=3');
                exit(); // Agregado para evitar ejecución adicional del código después de la redirección
            } else {
                throw new Exception("Error en la ejecución de la sentencia: " . mysqli_error($bd));
            }

            unlink('../imagenes/' . $propiedad_imagen['imagen']);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            // Redireccionar en caso de error
            header('Location: /bienesraices/admin/index.php?resultado=0');
            exit(); // Agregado para evitar ejecución adicional del código después de la redirección
        }
    }
}

incluirTemplate('header');

?>


<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>
    <?php if (intval($resultado) === 1) : ?>
        <p id="mensaje-confirmacion" class="alerta exito">Anuncio Registrado Exitosamente</p>
    <?php elseif (intval($resultado) === 2) : ?>
        <p id="mensaje-confirmacion" class="alerta exito">Se actualizó Exitosamente</p>
    <?php elseif (intval($resultado) === 3) : ?>
        <p id="mensaje-confirmacion" class="alerta exito">Se eliminó Exitosamente</p>
        <!-- <?php //elseif (intval($resultado) === 0) : 
                ?>
        <p id="mensaje-confirmacion" class="alerta error">Error al registrar el anuncio</p> -->
    <?php endif; ?>

    <a href="/bienesraices/admin/propiedades/crear.php" class="boton boton-verde">Nuevas Propiedades</a>

    <table class="propiedades">

        <thead>
            <!----Cabecera de la tabla----->
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <!----Cuerpo de la tabla----->
        <tbody> <!----Listar BD----->

            <?php while ($propiedad = mysqli_fetch_assoc($resultado_propiedades)) :   ?>

                <tr>
                    <td> <?php echo $propiedad['id']; ?> </td>
                    <td> <?php echo $propiedad['titulo']; ?></td>
                    <td> <img src="../imagenes/<?php echo $propiedad['imagen']; ?>" alt="imagen de la tabla" class="imagen-tabla"> </td>
                    <td> S/.<?php echo $propiedad['precio']; ?></td>
                    <td>

                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>

                        <a href="./propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-anaranjado">Actualizar</a>
                    </td>
                </tr>

            <?php endwhile; ?>

        </tbody>

    </table>

</main>

<?php

//Cerrar la conexion
mysqli_close($bd);


incluirTemplate('footer');
?>