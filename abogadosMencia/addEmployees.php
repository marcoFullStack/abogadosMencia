<?php
extract($_POST);
require_once("conexion.php");
    $data = $cnx->prepare("INSERT INTO mencia_employees (person,ID,position,associated) VALUES (?,?,?,?)");
    $data->bind_param("ssss",$person,$ID,$position,$associated);
    $data->execute();
        if ($data->error) {
            echo $data->error;
        }
        else {
            echo "REGISTRO GUARDADO";
        }
        $cnx->close();
        ?>