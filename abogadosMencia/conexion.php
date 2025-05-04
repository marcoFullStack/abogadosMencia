<?php
    $cnx = new mysqli("localhost","root","","bdabogadosmencia");
    if ($cnx->connect_error) {
        die("se acabó");
    }
?>