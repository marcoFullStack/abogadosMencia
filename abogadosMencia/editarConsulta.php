<?php
require_once("conexion.php");

if (isset($_GET['DNI'])) {
    $DNI = $_GET['DNI'];
    echo "DNI recibido: $DNI";
    $query = "SELECT person, customer, DNI, rol, branch, description FROM mencia_consultation WHERE DNI = ?";
    
    $stmt = $cnx->prepare($query);
    $stmt->bind_param("s", $DNI); 
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        extract($row);
    } else {
        echo "Consulta no encontrada.";
        exit;
    }
} else {
    echo "No se recibió el DNI.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Abogados Mencia</title>
    
</head>
<body>
    
    <?php
    require_once("adminIndex.php");
    ?>

<section class="formLegalConsultation container-fluid pt-5">
    <form name="mencia_consultation" id="legal" method="post" class="w-50 mx-auto border border-white rounded-3 p-3">
        <div class="pb-3">
            <label class="form-label text-white">Nombre del Consultor<span class="text-danger">(*)</span></label>
            <input type="text" name="person" id="person" maxlength="100" required placeholder="Escriba el nombre del Consultor" readonly class="form-control" value="<?php echo $person; ?>">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">Nombre del cliente<span class="text-danger">(*)</span></label>
            <input type="text" name="customer" id="customer" maxlength="100" required placeholder="Escriba el nombre del cliente" readonly class="form-control" value="<?php echo $customer; ?>">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">DNI/NIE<span class="text-danger">(*)</span></label>
            <input type="text" name="DNI" id="DNI" maxlength="100" required placeholder="Escriba el DNI/NIE del cliente" readonly class="form-control" value="<?php echo $DNI; ?>">
        </div>
        <div class="pb-3">
            <labe class="form-label text-white">Servicio<span class="text-danger">(*)</span></labe>
            <input type="text" name="rol" id="rol" maxlength="100" required placeholder="Escriba el servicio a desempeñar" readonly class="form-control" value="<?php echo $rol; ?>">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">Rama<span class="text-danger">(*)</span></label>
            <input type="text" name="branch" id="branch" maxlength="100" required placeholder="Escriba la rama sobre la que se va a consultar" readonly class="form-control" value="<?php echo $branch; ?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-white">Descripción de la consulta<span class="text-danger">(*)</span></label>
            <textarea readonly class="form-control" id="description" rows="3" maxlength="50000"><?php echo $description; ?></textarea>
        </div>
        <div>
            <a href="listaConsulta.php"><button type="button" class="btn btn-dark">Atras</button></a>
        </div>
    </form>
</section>


    <script src="js/scriptListaConsultation.js"></script>
</body>
</html>

