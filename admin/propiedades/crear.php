<?php
//Base de Datos
require '../../includes/config/database.php';
$bd = conectarDB();

//Consultar FFVV
$query_vendedores = "SELECT * FROM vendedores";
$result_vendedores = mysqli_query($bd, $query_vendedores);

//Arreglo manejo de errores
$errores = [];

//Obtener valores del formulario
$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedores_id = '';


//Ejecutar código después que el usuario envía el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo =  $_POST['titulo'];
    $precio =   $_POST['precio'];
    $descripcion =  $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc =   $_POST['wc'];
    $estacionamiento =  $_POST['estacionamiento'];
    $vendedores_id =  $_POST['vendedores_id'];
    $creado = date('Y/m/d');

    if (!$titulo) {
        $errores[] = "Debes añadir un título";
    }

    if (!is_numeric($precio)) {
        $errores[] = "El precio debe ser un valor numérico";
    } else if ($precio <= 0 || $precio >= 100000000) {
        $errores[] = "El valor ingresado supera el precio regular de venta";
    }

    if (strlen($descripcion) < 50) {
        $errores[] = "La descripción es obligatoria y debe tener 50 caracteres";
    }

    if (!$habitaciones) {
        $errores[] = "El número de habitaciones es obligatorio";
    }

    if (!$wc) {
        $errores[] = "El número de baños es obligatorio";
    }

    if (!$estacionamiento) {
        $errores[] = "El número de lugares estacionamientos es obligatorio";
    }

    if (!$vendedores_id) {
        $errores[] = "Elige un vendedor";
    }

    //Revisar que el arreglo de errores esté vacío
    if (empty($errores)) {
        //Insertar en la base de datos
        $query = "INSERT INTO propiedades (titulo, precio,descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) 
                    VALUES (?,?,?,?,?,?,?,?)";

        try {

            $stmt = mysqli_prepare($bd, $query);
            mysqli_stmt_bind_param($stmt, "ssssssss", $titulo, $precio, $descripcion, $habitaciones, $wc, $estacionamiento, $creado, $vendedores_id);

            $resultado = mysqli_stmt_execute($stmt);

            if ($resultado) {
                //Redireccionar al usuario
                header('Location: /bienesraices/admin/index.php');
            } else {
                throw new Exception("Error en la ejecución de la sentencia: " . mysqli_error($bd));
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            header('Location: /bienesraices/admin/index.php');
        }
    }
}



//Funciones php
require '../../includes/funciones.php';
incluirTemplate('header');

?>


<main class="contenedor seccion">
    <h1 class="titulo-crear">Crear</h1>

    <a href="/bienesraices/admin/index.php" class="boton boton-verde boton-crear">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/bienesraices/admin/propiedades/crear.php">

        <fieldset class="fieldset-formulario">
            <legend>Información General</legend>

            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo de la Propiedad" value="<?php echo htmlspecialchars($titulo); ?>">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Ej: $500" min="1"value="<?php echo htmlspecialchars($precio); ?>">

            <label for="imagen">Foto de la Propiedad:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?php echo htmlspecialchars($descripcion); ?></textarea>

        </fieldset>


        <fieldset>
            <legend>Información de la Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo htmlspecialchars($habitaciones); ?>">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo htmlspecialchars($wc); ?>">

            <label for="estacionamiento">Estacionamientos:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="0" max="9" value="<?php echo htmlspecialchars($estacionamiento); ?>">

        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedores_id">
                <option value="" disabled selected>-- Selecione --</option>
                <?php while ($vendedor = mysqli_fetch_assoc($result_vendedores)) :  ?>
                    <option <?php echo $vendedores_id === $vendedor['id'] ? 'selected' : ''; ?> 
                            value="<?php echo $vendedor['id']; ?>"> 
                            <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?>
                       </option>
                <?php endwhile;  ?>
            </select>


        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">

    </form>

</main>

<?php

incluirTemplate('footer');
?>