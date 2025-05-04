<?php
require_once("conexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $number = $_POST['number'] ?? '';
    $DNI = $_POST['DNI'] ?? '';
    $client = $_POST['client'] ?? '';
    $phone_number = $_POST['phone_number'] ?? '';
    $location = $_POST['location'] ?? '';
    $email = $_POST['email'] ?? '';
    $date_in = $_POST['date_in'] ?? '';
    $date_out = $_POST['date_out'] ?? '';
    $date_solution = $_POST['date_solution'] ?? '';
    $judged = $_POST['judged'] ?? '';
    $attendants = $_POST['attendants'] ?? '';
    $helpers = $_POST['helpers'] ?? '';
    $witnesses = $_POST['witnesses'] ?? '';
    $identification = $_POST['identification'] ?? '';
    $evidence = $_POST['evidence'] ?? '';
    $others = $_POST['others'] ?? '';
    $solution = $_POST['solution'] ?? '';
    $pacts = $_POST['pacts'] ?? '';
    $appeals = $_POST['appeals'] ?? '';
    $extra_bill = $_POST['extra_bill'] ?? '';
    $total_bill = $_POST['total_bill'] ?? '';
    $coments = $_POST['coments'] ?? '';
    

    if (empty($id)) {
        echo "Número de id es requerido.";
        exit;
    }

    $data = $cnx->prepare("UPDATE mencia_files SET name = ?, number = ?, DNI = ?, client = ?, phone_number = ?, location = ?, email = ?, date_in = ?, date_out = ?, date_solution = ?, judged = ?, attendants = ?, helpers = ?, witnesses = ?, identification = ?, evidence = ?, others = ?, solution = ?, pacts = ?, appeals = ?, extra_bill = ?, total_bill = ?, coments = ? WHERE id = ?");
    $data->bind_param("ssssssssssssssssssssssss", $name, $number, $DNI, $client, $phone_number, $location, $email, $date_in, $date_out, $date_solution, $judged, $attendants, $helpers, $witnesses, $identification, $evidence, $others, $solution, $pacts, $appeals, $extra_bill, $total_bill, $coments, $id);
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