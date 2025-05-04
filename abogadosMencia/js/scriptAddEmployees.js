$("#employees").submit(function (event) {
    event.preventDefault();
    var file = new FormData();
    file.append("person", $("#person").val());
    file.append("ID", $("#ID").val());
    file.append("position", $("#position").val());
    file.append("associated", $("#associated").val());
    $.ajax({
        type: 'POST',
        url: 'addEmployees.php',
        cache: false,
        processData: false,
        contentType: false,
        data: file,
        success: function(data){
            alert(data);
            $("#employees")[0].reset();
        },
        error: function() {
            alert('Hubo un error al enviar el formulario.');
        }
    });
});