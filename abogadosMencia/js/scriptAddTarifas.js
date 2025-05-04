$("#rates").submit(function (event) {
    event.preventDefault();
    var file = new FormData();
    file.append("person", $("#person").val());
    file.append("number", $("#number").val());
    file.append("specialty", $("#specialty").val());
    file.append("rol", $("#rol").val());
    file.append("fee", $("#fee").val());
    $.ajax({
        type: 'POST',
        url: 'addtarifas.php',
        cache: false,
        processData: false,
        contentType: false,
        data: file,
        success: function(data){
            alert(data);
            $("#rates")[0].reset();
        },
        error: function() {
            alert('Hubo un error al enviar el formulario.');
        }
    });
});