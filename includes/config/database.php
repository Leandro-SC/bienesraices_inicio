
<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost','root','$$etlPASS2023','bienesraices_crud');
    $db->set_charset('utf8');

    if (!$db) {
       echo "Error de Conexión ...";
       exit;
    }
    return $db;
}


















