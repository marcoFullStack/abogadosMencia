<?php
require_once("conexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $person = $_POST['person'] ?? '';
    $ID = $_POST['ID'] ?? '';
    $position = $_POST['position'] ?? '';
    $associated = $_POST['associated'] ?? '';

    if (empty($ID)) {
        echo "Número de ID es requerido.";
        exit;
    }

    $data = $cnx->prepare("UPDATE mencia_employees SET person = ?, position = ?, associated = ? WHERE ID = ?");
    $data->bind_param("sssi", $person, $position, $associated, $ID);
    $data->execute();

    if ($data->error) {
        echo $data->error;
    } else {
        echo 0;
    }

    $data->close();
    $cnx->close();
} else {
    echo "Solicitud inválida.";
}
?>