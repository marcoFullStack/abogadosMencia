<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Abogados Mencia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/adminStyles.css" rel="stylesheet">
</head>
<body>
    
    <section class="bgColor header">
        <section class="bgColor outlineColor container-fluid pb-2">
            <div class="row">
                <div class="col-sm-12 col-lg-8 text-sm-center text-lg-end">
                    <img src="images/logoAbogados.png" alt="logo abogados mencia." class="w-50">
                </div>
            </div>
    </section>
    <div class="container-fluid py-5">
        <div class="formulario mx-auto formStyle">
            <form name="admin" id="admin" method="post" action="#">
                <div class="mb-3">
                    <label class="form-label text-white">Usuario</label>
                    <input type="text" name="usuario" id="usuario" maxlength="100" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label text-white">Contraseña</label>
                    <input type="password" name="psw" id="psw" maxlength="250" class="form-control">
                </div>
                <div class="text-center">
                    <a href="adminIndex.php" type="submit" class="btn btn-dark">Acceder</a>
                </div>
            </form>
        </div>
    </div>

    <?php
    require_once("footer.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>