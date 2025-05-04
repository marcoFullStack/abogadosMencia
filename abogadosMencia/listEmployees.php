<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista Empleados</title>
</head>
<body>

<?php
    require_once ("adminIndex.php");
?>

    
    <section class="container-lg my-5 bgColor">
    <a href="employees.php" class="container-lg pt-5"><button type="button" class="btn btn-outline-light">Agregar Empleado</button></a>
        <div class="row tabla pt-5">
            <table class="table" id="listatabla">
                <thead>
                    <tr class="text-center">
                        <th class="bg-body-secondary">Nombre del abogado</th>
                        <th class="bg-body-secondary">DNI/NIE</th>
                        <th class="bg-body-secondary">Cargo</th>
                        <th class="bg-body-secondary">Asociado</th>
                        <th class="bg-body-secondary">Editar</th>
                        <th class="bg-body-secondary">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once("conexion.php");
                        $data = $cnx->query("SELECT person,ID,position,associated FROM mencia_employees ORDER BY position");
                        while ($row = $data->fetch_assoc()) {
                            extract($row);
                            echo "<tr class='text-center align-middle'><td>$person</td><td>$ID</td><td>$position</td><td>$associated</td><td><a href='editarEmpleado.php?ID=$ID' class='text-decoration-none text-white'><button type='button' class='btn btn-success text-white'>Editar</button></a></td><td><button type='button' class='btn btn-danger btnEliminar'>Eliminar</button></td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/scriptListaEmpleados.js"></script>
</body>
</html>