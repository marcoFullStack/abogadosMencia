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
    <a href="archivos.php" class="container-lg pt-5"><button type="button" class="btn btn-outline-light">Agregar Archivo</button></a>
        <div class="row tabla pt-5">
            <table class="table" id="listatabla">
                <thead>
                    <tr class="text-center">
                        <th class="bg-body-secondary">Número</th>
                        <th class="bg-body-secondary">Nombre del Archivo</th>
                        <th class="bg-body-secondary">Tipo</th>
                        <th class="bg-body-secondary">Descargar Achivo</th>
                        <th class="bg-body-secondary">Borrar Archivo</th>
                    </tr>
                </thead>
                <div>
                    
                </div>
                <tbody>
                    <?php
                        require_once("conexion.php");
                        $data = $cnx->query("SELECT id,name,type,archivo FROM mencia_archives ORDER BY type");
                        while ($row = $data->fetch_assoc()) {
                            extract($row);
                            echo "<tr class='text-center align-middle'>
                            <td>$id</td>
                            <td>$name</td>
                            <td>$type</td>
                            <td><a href=\"descarga.php?id=$id\" class=\"btn btn-success\">Descargar Archivo</a></td>
                            <td><button type='button' class='btn btn-danger btnEliminar'>Eliminar</button></td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/scriptListaArchivos.js"></script>
</body>
</html>