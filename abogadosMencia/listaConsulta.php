<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista tarifas</title>
</head>
<body>

<?php
    require_once ("adminIndex.php");
?>

    
    <section class="container-lg my-5 bgColor">
    <a href="consultaJuridica.php" class="container-lg pt-5"><button type="button" class="btn btn-outline-light">Agregar Consulta</button></a>
        <div class="row tabla pt-5">
            <table class="table" id="listatabla">
                <thead>
                    <tr class="text-center">
                        <th class="bg-body-secondary">Borrar</th>
                        <th class="bg-body-secondary">Nombre del abogado</th>
                        <th class="bg-body-secondary">Nombre del cliente</th>
                        <th class="bg-body-secondary">DNI/NIE del cliente </th>
                        <th class="bg-body-secondary">Servicio</th>
                        <th class="bg-body-secondary">Rama</th>
                        <th class="bg-body-secondary">ver</th>
                    </tr>
                </thead>
                <div>
                    
                </div>
                <tbody>
                    <?php
                        require_once("conexion.php");
                        $data = $cnx->query("SELECT person,customer,DNI,rol,branch FROM mencia_consultation ORDER BY person");
                        while ($row = $data->fetch_assoc()) {
                            extract($row);
                            echo "<tr class='text-center align-middle'><td>$person</td><td>$customer</td><td>$DNI</td><td>$rol</td><td>$branch</td><td><a href='editarConsulta.php?DNI=$DNI' class='text-decoration-none text-white'><button type='button' class='btn btn-success text-white'>Abrir</button></a></td><td><button type='button' class='btn btn-danger btnEliminar'>Eliminar</button></td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/scriptListaConsultation.js"></script>
</body>
</html>