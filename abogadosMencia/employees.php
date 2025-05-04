<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Empleados</title>
</head>
<body>
    
<?php
    require_once ("adminIndex.php");
?>

<section class="formRates container-fluid pt-5">
    <form name="mencia_employees" id="employees" method="post" class="w-50 mx-auto border border-white rounded-3 p-3">
        <div class="pb-3">
            <label class="form-label text-white">Nombre del empleado<span class="text-danger">(*)</span></label>
            <input type="text" name="person" id="person" maxlength="100" required placeholder="Escriba el nombre del empleado" class="form-control">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">DNI/NIE<span class="text-danger">(*)</span></label>
            <input type="text" name="ID" id="ID" maxlength="100" required placeholder="Escriba el DNI/NIE del empleado" class="form-control">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">Cargo<span class="text-danger">(*)</span></label>
            <input type="text" name="position" id="position" maxlength="100" required placeholder="Escriba el cargo del empleado" class="form-control">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">Asociado<span class="text-danger">(*)</span></label>
            <select name="associated" id="associated" class="form-select">
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


<script src="js/scriptAddEmployees.js"></script>
</body>
</html>