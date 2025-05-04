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

    
    <section class="container-lg my-5 bgColor">
    <a href="expediente.php" class="container-lg pt-5"><button type="button" class="btn btn-outline-light">Agregar Expediente</button></a>
        <div class="row tabla pt-5">
            <table class="table" id="listatabla">
                <thead>
                    <tr class="text-center">
                        <th class="bg-body-secondary">Número de expediente</th>
                        <th class="bg-body-secondary">Nombre del abogado</th>
                        <th class="bg-body-secondary">Nombre del cliente</th>
                        <th class="bg-body-secondary">Abrir/Editar</th>
                        <th class="bg-body-secondary">Descargar Archvio</th>
                        <th class="bg-body-secondary">Borrar</th>
                    </tr>
                </thead>
                <div>
                    
                </div>
                <tbody>
                    <?php
                        require_once("conexion.php");
                        $data = $cnx->query("SELECT id,name,client FROM mencia_files ORDER BY id");
                        while ($row = $data->fetch_assoc()) {
                            extract($row);
                            echo "<tr class='text-center align-middle'>
                            <td>$id</td>
                            <td>$name</td>
                            <td>$client</td>
                            <td><a href='editarExpediente.php' class='text-decoration-none text-white'><button type='button' class='btn btn-success text-white'>Abrir</button></a></td>
                            <td><a href=\"descargaFile.php?id=$id\" class=\"btn btn-primary\">Descargar Archivo</a></td>
                            <td><button type='button' class='btn btn-danger btnEliminar'>Eliminar</button></td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/scriptListaFiles.js"></script>
</body>
</html>