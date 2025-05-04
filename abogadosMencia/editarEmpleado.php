<?php
require_once("conexion.php");

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    echo "ID recibido: $ID";
    $query = "SELECT person, ID, position , associated FROM mencia_employees WHERE ID = ?";
    
    $stmt = $cnx->prepare($query);
    $stmt->bind_param("i", $ID); 
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        extract($row);
    } else {
        echo "Consulta no encontrada.";
        exit;
    }
} else {
    echo "No se recibió el ID.";
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

<section class="formRates container-fluid pt-5">
    <form name="mencia_employees" id="editEmployees" method="post" class="w-50 mx-auto border border-white rounded-3 p-3">
        <div class="pb-3">
            <label class="form-label text-white">Nombre del empleado<span class="text-danger">(*)</span></label>
            <input type="text" name="person" id="person" maxlength="100" required placeholder="Escriba el nombre del empleado" class="form-control"
            value="<?php echo $person; ?>">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">DNI/NIE<span class="text-danger">(*)</span></label>
            <input type="text" name="ID" id="ID" maxlength="100" required placeholder="Escriba el DNI/NIE del empleado" class="form-control" value="<?php echo $ID; ?>">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">Cargo<span class="text-danger">(*)</span></label>
            <input type="text" name="position" id="position" maxlength="100" required placeholder="Escriba el cargo del empleado" class="form-control" value="<?php echo $position; ?>">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">Asociado<span class="text-danger">(*)</span></label>
            <select name="associated" id="associated" class="form-select" value="<?php echo $associated; ?>">
                <option value="info" selected disabled>¿Esta asociado?</option>
                <option value="yes">Si</option>
                <option value="no">No</option>
            </select>
        </div>
        <div>
            <button type="submit" value="submit" name="submit" id="submit" class="btn btn-dark">Guardar</button>
            <a href="listEmployees.php"><button type="button" class="btn btn-dark mx-5">Atras</button></a>
        </div>
    </form>
</section>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/scriptListaEmpleados.js"></script>
</body>
</html>