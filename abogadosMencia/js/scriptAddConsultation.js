$("#legal").submit(function (event) {
    event.preventDefault();
    var file = new FormData();
    file.append("person", $("#person").val());
    file.append("customer", $("#customer").val());
    file.append("DNI", $("#DNI").val());
    file.append("rol", $("#rol").val());
    file.append("branch", $("#branch").val());
    file.append("description", $("#description").val());
    $.ajax({
        type: 'POST',
        url: 'addConsulta.php',
        cache: false,
        processData: false,
        contentType: false,
        data: file,
        success: function(data){
            alert(data);
            $("#legal")[0].reset();
        },
        error: function() {
            alert('Hubo un error al enviar el formulario.');
        }
    });
});