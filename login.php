<?php

require 'includes/config/database.php';
$db = conectarDB();

$errores = [];

//Autenticar usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //Obtener valores del formulario
    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = "El email es obligatorio o no es válido";
    }

    if (!$password) {
        $errores[] = "El password es obligatorio";
    }

    if (empty($errores)) {
        //Revisar si el usuario existe
        $query = "SELECT * FROM usuarios WHERE email = '{$email}'";
        $resultado = mysqli_query($db, $query);

        if ($resultado->num_rows) {

            $usuario = mysqli_fetch_assoc($resultado);

            //Verificar si el password es correcto
            $auth = password_verify($password,$usuario['password']);
            if ($auth) {
                //COnfirmacion de autenticacion
                session_start();
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;
                
                //Redireccionar a página de Administrador
                header('Location: /bienesraices/admin/index.php');
            }else {
               $errores[] = "El usuario o la contraseña son incorrectos";
            }

        } else {
            $errores[] = "El usuario no existe";
        }
    }
}

//Incluye el Header
require 'includes/funciones.php';
incluirTemplate('header');

?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesion</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" class="formulario">

        <fieldset class="formulario-prueba">

            <legend>Email y Password</legend>

            <label for="correo">E-mail</label>
            <input type="email" placeholder="usuario@dominio.com" id="email" name="email" require>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" require>

        </fieldset>

        <input type="submit" value="Iniciar Sesion" class="boton boton-verde">

    </form>

</main>

<?php

include './includes/templates/footer.php';
?>