<?php
extract($_POST);
require_once("conexion.php");
    $data = $cnx->prepare("INSERT INTO mencia_consultation (person,customer,DNI,rol,branch, description) VALUES (?,?,?,?,?,?)");
    $data->bind_param("ssssss",$person,$customer,$DNI,$rol,$branch,$description);
    $data->execute();
        if ($data->error) {
            echo $data->error;
        }
        else {
            echo "REGISTRO GUARDADO";
        }
        $cnx->close();
        ?>