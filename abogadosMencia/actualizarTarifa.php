<?php
require_once("conexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $person = $_POST['person'] ?? '';
    $number = $_POST['number'] ?? '';
    $specialty = $_POST['specialty'] ?? '';
    $rol = $_POST['rol'] ?? '';
    $fee = $_POST['fee'] ?? '';

    if (empty($number)) {
        echo "Número de colegiado es requerido.";
        exit;
    }

    $data = $cnx->prepare("UPDATE mencia_rates SET person = ?, specialty = ?, rol = ?, fee = ? WHERE number = ?");
    $data->bind_param("sssss", $person, $specialty, $rol, $fee, $number);
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