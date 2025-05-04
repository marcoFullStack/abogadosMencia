<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tarifas</title>
</head>
<body>
    
<?php
    require_once ("adminIndex.php");
?>

<section class="formLegalConsultation container-fluid pt-5">
    <form name="mencia_consultation" id="legal" method="post" class="w-50 mx-auto border border-white rounded-3 p-3">
        <div class="pb-3">
            <label class="form-label text-white">Nombre del Consultor<span class="text-danger">(*)</span></label>
            <input type="text" name="person" id="person" maxlength="100" required placeholder="Escriba el nombre del Consultor" class="form-control">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">Nombre del cliente<span class="text-danger">(*)</span></label>
            <input type="text" name="customer" id="customer" maxlength="100" required placeholder="Escriba el nombre del cliente" class="form-control">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">DNI/NIE<span class="text-danger">(*)</span></label>
            <input type="text" name="DNI" id="DNI" maxlength="100" required placeholder="Escriba el DNI/NIE del cliente" class="form-control">
        </div>
        <div class="pb-3">
            <labe class="form-label text-white">Servicio<span class="text-danger">(*)</span></labe>
            <input type="text" name="rol" id="rol" maxlength="100" required placeholder="Escriba el servicio a desempeñar" class="form-control">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">Rama<span class="text-danger">(*)</span></label>
            <input type="text" name="branch" id="branch" maxlength="100" required placeholder="Escriba la rama sobre la que se va a consultar" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-white">Descripción de la consulta<span class="text-danger">(*)</span></label>
            <textarea class="form-control" id="description" rows="3" maxlength="50000"></textarea>
        </div>
        <div>
            <button type="submit" value="submit" name="submit" id="submit" class="btn btn-dark">Guardar</button>
            <a href="listaConsulta.php"><button type="button" class="btn btn-dark mx-5">Atras</button></a>
        </div>
    </form>
</section>


<script src="js/scriptAddConsultation.js"></script>
</body>
</html>