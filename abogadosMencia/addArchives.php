<?php

extract($_POST);

if ($_FILES['archivo']['name'] != "") {
    $ruta = "archives/";
    if (!file_exists($ruta)) {
        mkdir($ruta); 
    }

    $archivo = $ruta . basename($_FILES['archivo']['name']);
    
    if ($_FILES['archivo']['size'] > 50000000) {
        echo "Archivo demasiado grande";
    } 
    elseif ($_FILES['archivo']['type'] != "application/pdf") {
        echo "Tipo de archivo no permitido. Solo se permiten archivos PDF.";
    }
    elseif (move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo)) {
        require_once("conexion.php");
        
        $data = $cnx->prepare("INSERT INTO mencia_archives (name, type, archivo) VALUES (?, ?, ?)");
        $data->bind_param("sss", $name, $type, $archivo);
        
        $data->execute();
        
        if ($data->error) {
            echo "Error en la base de datos: " . $data->error;
        } else {
            echo "Archivo subido correctamente";
        }
    } else {
        echo "Error al mover el archivo.";
    }
}
?>