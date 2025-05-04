<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista tarifas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php
    require_once ("adminIndex.php");
?>

    
    <section class="container-lg my-5 bgColor">
    <a href="tarifas.php" class="container-lg pt-5"><button type="button" class="btn btn-outline-light">Agregar Tarifa</button></a>
        <div class="row tabla pt-5">
            <table class="table" id="listatabla">
                <thead>
                    <tr class="text-center">
                        <th class="bg-body-secondary">Nombre del abogado</th>
                        <th class="bg-body-secondary">Número de colegiado</th>
                        <th class="bg-body-secondary">Especialidad</th>
                        <th class="bg-body-secondary">Servicio</th>
                        <th class="bg-body-secondary">Tarifa</th>
                        <th class="bg-body-secondary">Editar</th>
                        <th class="bg-body-secondary">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once("conexion.php");
                        $data = $cnx->query("SELECT person,number,specialty,rol,fee FROM mencia_rates ORDER BY rol");
                        while ($row = $data->fetch_assoc()) {
                            extract($row);
                            echo "<tr class='text-center align-middle'><td>$person</td><td>$number</td><td>$specialty</td><td>$rol</td><td>$fee</td><td><a href='editarTarifa.php' class='text-decoration-none text-white'><button type='button' class='btn btn-success text-white'>Editar</button></a></td><td><button type='button' class='btn btn-danger btnEliminar'>Eliminar</button></td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/scriptListaTarifas.js"></script>
</body>
</html>
