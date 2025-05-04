<?php
extract($_POST);
require_once("conexion.php");
$query = "SELECT person, number, specialty, rol, fee FROM mencia_rates";
$data = $cnx->query($query);
while ($row = $data->fetch_assoc())
    extract($row);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Abogados Mencia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <?php
    require_once("adminIndex.php");
    ?>

<section class="formRates container-fluid pt-5">
    <form name="mencia_rates" id="editTarifa" method="post" class="w-50 mx-auto border border-white rounded-3 p-3">
        <div class="pb-3">
            <label class="form-label text-white">Editar el nombre del abogado<span class="text-danger">(*)</span></label>
            <input type="text" name="person" id="person" maxlength="100" required placeholder="Escriba el nombre del abogado" class="form-control" value="<?php echo $person; ?>">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">Editar el número del Colegiado<span class="text-danger">(*)</span></label>
            <input type="text" name="number" id="number" maxlength="100" required placeholder="Escriba el número del colegiado" class="form-control" value="<?php echo $number; ?>">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">Editar la especialidad<span class="text-danger">(*)</span></label>
            <input type="text" name="specialty" id="specialty" maxlength="100" required placeholder="Escriba el campo o especialidad del abogado" class="form-control" value="<?php echo $specialty; ?>">
        </div>
        <div class="pb-3">
            <labe class="form-label text-white">Editar el servicio<span class="text-danger">(*)</span></labe>
            <input type="text" name="rol" id="rol" maxlength="100" required placeholder="Escriba el servicio a desempeñar" class="form-control" value="<?php echo $rol; ?>">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">Editar la tarifa<span class="text-danger">(*)</span></label>
            <input type="text" name="fee" id="fee" maxlength="7" required placeholder="Escriba el numero de tarifa con el simbolo del euro" class="form-control" value="<?php echo $fee; ?>">
        </div>
        <button type="submit" value="submit" name="submit" id="submit" class="btn btn-dark">Editar</button>
    </form>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/scriptListaTarifas.js"></script>
</body>
</html>

