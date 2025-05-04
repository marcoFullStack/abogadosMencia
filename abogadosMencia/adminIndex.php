<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/adminStyles.css" rel="stylesheet">
</head>
<body>
    
    <section class="bgColor header">
        <section class="bgColor outlineColor container-fluid pb-2">
            <div class="row">
                <div class="col-sm-12 col-lg-8 text-sm-center text-lg-end">
                    <a href="index.php"><img src="images/logoAbogados.png" alt="logo abogados Mencia." class="w-50"></a>
                </div>
            </div>
    </section>
    <section class="menu">
        <div class="py-2 outlineColor">
                <nav class="navbar navbar-expand-lg bgColor">
                    <div class="container-fluid">
                      <a class="navbar-brand text-white fs-6 mx-5" href="listaExpediente.php">Expedientes</a>
                      <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link active text-white mx-5" aria-current="page" href="ListArchivos.php">Archivos de Gestión Administrativa</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white mx-5" href="listEmployees.php">Gestión de Empleados</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white mx-5" href="listaConsulta.php">Consulta judírica</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white mx-5" href="listaTarifas.php">Lista de tarifas</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
    </section>

    <?php
    require_once("footer.php");
    ?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>