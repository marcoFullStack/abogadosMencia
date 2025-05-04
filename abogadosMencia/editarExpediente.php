<?php
extract($_POST);
require_once("conexion.php");
$query = "SELECT id, name, number,DNI, client, phone_number, location, email, date_in, date_out, date_solution, judged, attendants, helpers, witnesses, identification, evidence, documents, image, others, solution, pacts, appeals, extra_bill, total_bill, coments FROM mencia_files";
$data = $cnx->query($query);
while ($row = $data->fetch_assoc())
    extract($row);
?>

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
        <form name="mencia_files" id="editFile" method="post" class="w-75 mx-auto border border-white rounded-3 p-3">
            <div class="outlineColor pb-3">
                <label class="form-label text-white">Número de expediente<span class="text-danger">(*)</span></label>
                <input type="text" name="id" id="id" placeholder="Identifica el expediente" class="form-control w-25" value="<?php echo $id; ?>">
            </div>
            <div class="row outlineColor pb-3">
            <p class="text-white pt-3">Datos del Abogado</p>
                <div class="col-sm-12 col-lg-4">
                    <label class="form-label text-white">Nombre<span class="text-danger">(*)</span></label>
                    <input type="text" name="name" id="name" required placeholder="Escriba su nombre" class="form-control w-75" value="<?php echo $name; ?>">
                </div>
                <div class="col-sm-12 col-lg-4">
                    <label class="form-label text-white">Número del colegiado<span class="text-danger">(*)</span></label>
                    <input type="text" name="number" id="number" required placeholder="Escriba su nº del colegiado" class="form-control w-75" value="<?php echo $number; ?>">
                </div>
            </div>
            <div class="row pb-3">
            <p class="text-white pt-3">Datos del cliente</p>
                <div class="col-sm-12 col-lg-4">
                    <label class="form-label text-white">Nombre<span class="text-danger">(*)</span></label>
                    <input type="text" name="client" id="client" required placeholder="Escriba el nombre" class="form-control w-75" value="<?php echo $client; ?>">
                </div>
                <div class="col-sm-12 col-lg-4">
                    <label class="form-label text-white">DNI/NIE o Pasaporte<span class="text-danger">(*)</span></label>
                    <input type="text" name="DNI" id="DNI" required placeholder="Escriba nº de identificación" class="form-control w-75" value="<?php echo $DNI; ?>">
                </div>
            </div>
            <div class="row outlineColor pb-3">
            <div class="col-sm-12 col-lg-4 pt-3">
                    <label class="form-label text-white">Número teléfono <span class="text-danger">(*)</span></label>
                    <input type="text" name="phone_number" id="phone_number" required placeholder="Escriba el nº de telefono" class="form-control w-75" value="<?php echo $phone_number; ?>">
                </div>
                <div class="col-sm-12 col-lg-4 pt-3">
                    <label class="form-label text-white">Correo electrónico<span class="text-danger">(*)</span></label>
                    <input type="mail" name="email" id="email" required placeholder="Escriba el email" class="form-control w-75" value="<?php echo $email; ?>">
                </div>
                <div class="col-sm-12 col-lg-4 pt-3">
                    <label class="form-label text-white">Dirección<span class="text-danger">(*)</span></label>
                    <input type="text" name="location" id="location" required placeholder="Escriba la dirección" class="form-control w-100" value="<?php echo $location; ?>">
                </div>
            </div>
            <div class="outlineColor pb-3">
            <p class="text-white pt-3">Datos del Oficio</p>
                <div class="row">
                    <div class="col-sm-12 col-lg-4">
                        <label class="form-label text-white">Fecha de inicio<span class="text-danger"></span></label>
                        <input type="date" name="date_in" id="date_in" placeholder="Escriba la fecha de incio" class="form-control w-75" value="<?php echo $date_in; ?>">
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <label class="form-label text-white">Fecha de fin<span class="text-danger"></span></label>
                        <input type="date" name="date_out" id="date_out" placeholder="Escriba la fecha de fin" class="form-control w-75" value="<?php echo $date_out; ?>">
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <label class="form-label text-white">Fecha de Resolución<span class="text-danger"></span></label>
                        <input type="date" name="date_solution" id="date_solution" placeholder="Escriba la fecha" class="form-control w-75" value="<?php echo $date_solution; ?>">
                    </div>
                    <div class="col-sm-12 col-lg-4 pt-4">
                        <label class="form-label text-white">Juzgado<span class="text-danger"></span></label>
                        <input type="text" name="judged" id="judged" placeholder="Escriba el Juzgado" class="form-control w-75" value="<?php echo $judged; ?>">
                    </div>
                    <div class="col-sm-12 col-lg-4 pt-4">
                        <label class="form-label text-white">Asistentes<span class="text-danger"></span></label>
                        <input type="text" name="attendants" id="attendants" placeholder="Escriba si hay asistentes" class="form-control w-75" value="<?php echo $attendants; ?>">
                    </div>
                    <div class="col-sm-12 col-lg-4 pt-4">
                        <label class="form-label text-white">Expertos externos<span class="text-danger"></span></label>
                        <input type="text" name="helpers" id="helpers" placeholder="Escriba si hay expertos" class="form-control w-75" value="<?php echo $helpers; ?>">
                    </div>
                    <div class="col-sm-12 col-lg-4 pt-4">
                        <label class="form-label text-white">Testigos<span class="text-danger"></span></label>
                        <input type="text" name="witnesses" id="witnesses" placeholder="Escriba el nombre" class="form-control w-75" value="<?php echo $witnesses; ?>">
                    </div>
                    <div class="col-sm-12 col-lg-4 pt-4">
                        <label class="form-label text-white">DNI/NIE Pasaporte del testigo<span class="text-danger"></span></label>
                        <input type="text" name="identification" id="identification" placeholder="Escriba ID del testigo" class="form-control w-75" value="<?php echo $identification; ?>">
                    </div>
                    <div class="col-sm-12 col-lg-4 pt-4">
                        <label class="form-label text-white">Pruebas<span class="text-danger"></span></label>
                        <input type="text" name="evidence" id="evidence" placeholder="Escriba el tipo de prueba" class="form-control w-75" value="<?php echo $evidence; ?>">
                    </div>
                    <div class="col-sm-12 col-lg-4 pt-4">
                        <label class="form-label text-white">Documentos<span class="text-danger"></span></label>
                        <input type="file" name="documents" id="documents" class="form-control w-75" value="<?php echo $documents; ?>">
                    </div>
                    <div class="col-sm-12 col-lg-4 pt-4">
                        <label class="form-label text-white">Fotos o imagenes<span class="text-danger"></span></label>
                        <input type="file" name="image" id="image" class="form-control w-75" value="<?php echo $image; ?>">
                    </div>
                    <div class="col-sm-12 col-lg-4 pt-4">
                        <label class="form-label text-white">Otros Datos<span class="text-danger"></span></label>
                        <input type="text" name="others" id="others" placeholder="Escriba otros datos" class="form-control w-75" value="<?php echo $others; ?>">
                    </div>
                </div> 
            </div>
            <div class="row pb-3 outlineColor">
            <p class="text-white pt-3">Resolución final</p>
                <div class="mb-3">
                <label for="solution" class="form-label text-white">Resolución del oficio</label>
                <textarea class="form-control" name="solution" id="solution" rows="3" maxlength="5000"><?php echo $solution; ?></textarea>
                </div>
                <div class="mb-3">
                <label for="pacts" class="form-label text-white">Pactos y Conciliaciones</label></label>
                <textarea class="form-control" name="pacts" id="pacts" rows="3" maxlength="5000"><?php echo $pacts; ?></textarea>
                </div>
                <div class="mb-3">
                <label for="appeals" class="form-label text-white">Apelaciones</label>
                <textarea class="form-control" name="appeals" id="appeals" rows="3" maxlength="5000" ><?php echo $appeals; ?></textarea>
                </div>
            </div>
            <div class="row pb-3 outlineColor">
            <p class="text-white pt-3">Factura</p>
                <div class="col-sm-12 col-lg-4">
                    <label class="form-label text-white">Costes extras<span class="text-danger"></span></label>
                    <input type="text" name="extra_bill" id="extra_bill" class="form-control w-75" value="<?php echo $extra_bill; ?>">
                </div>
                <div class="col-sm-12 col-lg-4">
                    <label class="form-label text-white">Costes totales<span class="text-danger"></span></label>
                    <input type="text" name="total_bill" id="total_bill" class="form-control w-75" value="<?php echo $total_bill; ?>">
                </div>
            </div>
            <div class="my-3">
                <label for="coments" class="form-label text-white">Comentarios</label>
                <textarea class="form-control" name="coments" id="coments" rows="3" maxlength="50000"><?php echo $coments; ?>"</textarea>
            </div>
            <button type="submit" value="submit" name="submit" id="submit" class="btn btn-dark">Guardar</button>
            <a href="listaExpediente.php"><button type="button" class="btn btn-dark mx-5">Atras</button></a>
        </form>
</section>


<script src="js/scriptListaFiles.js"></script>
</body>
</html>