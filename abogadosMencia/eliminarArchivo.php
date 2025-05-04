<?php
extract($_POST);
require_once("conexion.php");
$cnx->query("DELETE FROM mencia_archives WHERE id = '$identificador'");
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $file_path = $row['archives/'];
    $file_path = "archives/" . $file_name;
    
    if (file_exists($archives)) {
        if (unlink($archives)) {
            $cnx->query("DELETE FROM mencia_archives WHERE id = '$identificador'");
            if ($cnx->error) {
                echo 1;
            } else {
                echo 0;
            }
        } else {
            echo "Error al intentar eliminar el archivo del servidor.";
        }
    } else {
        echo "El archivo no existe en el servidor.";
    }
} else {
    echo "No se encontró el archivo en la base de datos.";
}
?>