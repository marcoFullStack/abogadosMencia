$("#archives").submit(function (event) {
    event.preventDefault();
    var file = new FormData();
    file.append("name", $("#name").val());
    file.append("type", $("#type").val());
    file.append("archivo", $("#archivo")[0].files[0]);
    $.ajax({
        type: 'POST',
        url: 'addArchives.php',
        cache: false,
        processData: false,
        contentType: false,
        data: file,
        success: function(data){
            alert(data);
            $("#archives")[0].reset();
        },
        error: function() {
            alert('Hubo un error al enviar el archivo.');
        }
    });
});