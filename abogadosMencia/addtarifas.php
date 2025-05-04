<?php
extract($_POST);
require_once("conexion.php");
    $data = $cnx->prepare("INSERT INTO mencia_rates (person,number,specialty,rol,fee) VALUES (?,?,?,?,?)");
    $data->bind_param("sssss",$person,$number,$specialty,$rol,$fee);
    $data->execute();
        if ($data->error) {
            echo $data->error;
        }
        else {
            echo "REGISTRO GUARDADO";
        }
        $cnx->close();
        ?>