<?php
extract($_POST);
require_once("conexion.php");
$cnx->query("DELETE FROM mencia_consultation WHERE DNI = '$identificador'");
if($cnx->error){
    echo 1;
}
else {
    echo 0;
}