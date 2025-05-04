<?php
require_once("conexion.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    echo "ID recibido: " . $id . "<br>";
    
    $query = "SELECT name, number, DNI, client, phone_number, location, email, date_in, date_out, date_solution, judged, attendants, helpers, witnesses, identification, evidence, documents, image, others, solution, pacts, appeals, extra_bill, total_bill, coments FROM mencia_files WHERE id = $id";
    $result = $cnx->query($query);

    if ($result && $result->num_rows > 0) {
        $file = $result->fetch_assoc();
        $file_path = $file['documents'];
        echo "Ruta del archivo: " . $file_path . "<br>";
        if (file_exists($file_path)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file_path));

            ob_clean();
            flush();
            
            readfile($file_path);
            exit;
        } else {
            echo "El archivo no existe en el servidor.";
        }
    } else {
        echo "No se encontró el archivo en la base de datos.";
    }
} else {
    echo "No se especificó un identificador.";
}
?>