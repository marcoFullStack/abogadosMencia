$("#files").submit(function (event) {
    event.preventDefault();
    var file = new FormData();
    file.append("id", $("#id").val());
    file.append("name", $("#name").val());
    file.append("number", $("#number").val());
    file.append("client", $("#client").val());
    file.append("DNI", $("#DNI").val());
    file.append("phone_number", $("#phone_number").val());
    file.append("email", $("#email").val());
    file.append("location", $("#location").val());
    file.append("date_in", $("#date_in").val());
    file.append("date_out", $("#date_out").val());
    file.append("date_solution", $("#date_solution").val());
    file.append("judged", $("#judged").val());
    file.append("attendants", $("#attendants").val());
    file.append("helpers", $("#helpers").val());
    file.append("witnesses", $("#witnesses").val());
    file.append("identification", $("#identification").val());
    file.append("evidence", $("#evidence").val());
    file.append("documents", $("#documents")[0].files[0]);
    file.append("image", $("#image")[0].files[0]);
    file.append("others", $("#others").val());
    file.append("solution", $("#solution").val());
    file.append("pacts", $("#pacts").val());
    file.append("appeals", $("#appeals").val());
    file.append("extra_bill", $("#extra_bill").val());
    file.append("total_bill", $("#total_bill").val());
    file.append("coments", $("#coments").val());
    $.ajax({
        type: 'POST',
        url: 'addexpediente.php',
        cache: false,
        processData: false,
        contentType: false,
        data: file,
        success: function(data){
            alert(data);
            $("#files")[0].reset();
        },
        error: function() {
            alert('Hubo un error al enviar el formulario.');
        }
    });
});