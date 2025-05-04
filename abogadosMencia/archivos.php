<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Archivos</title>
</head>
<body>
    
<?php
    require_once ("adminIndex.php");
?>

<section class="formRates container-fluid pt-5">
    <form name="mencia_archives" id="archives" method="post" class="w-50 mx-auto border border-white rounded-3 p-3" enctype="multipart/form-data">
        <div class="pb-3">
            <label class="form-label text-white">Nombre del Archivo<span class="text-danger">(*)</span></label>
            <input type="text" name="name" id="name" maxlength="100" required placeholder="Escriba el nombre del archivo" class="form-control">
        </div>
        <div class="pb-3">
            <label class="form-label text-white">Tipo de Archivo<span class="text-danger">(*)</span></label>
            <input type="text" name="type" id="type" maxlength="100" required placeholder="Escriba el tipo de archivo" class="form-control">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label text-white">Archivo<span class="text-danger">(*)</span></label>
            <input class="form-control" type="file" id="archivo" name="archivo" required placeholder="Coloque aquí su archivo.">
        </div>
        <div>
            <button type="submit" value="submit" name="submit" id="submit" class="btn btn-dark">Guardar</button>
            <a href="listArchivos.php"><button type="button" class="btn btn-dark mx-5">Atras</button></a>
        </div>
    </form>
</section>

<script
src="https://code.jquery.com/jquery-3.7.1.js"
integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
crossorigin="anonymous"></script>
<script src="js/scriptAddArchive.js"></script>
</body>
</html>


