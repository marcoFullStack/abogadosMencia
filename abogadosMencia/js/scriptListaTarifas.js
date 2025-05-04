$("#listatabla").on("click",".btnEliminar",function(){
    let identificador = $(this).parents("tr").find("td").eq(1).text();
    let person = $(this).parents("tr").find("td").eq(0).text();
    Swal.fire({
        icon: 'question',
        title: 'CONFIRMAR',
        html: 'Confirmar la eliminación de la tarifa <b>' + person + "</b>",
        showCancelButton: true,
        confirmButtonText: "SI BORRAR",
        cancelButtonText: "NO CANCELAR"
    }).then((response)=>{
        if (response.isConfirmed) {
            $.ajax({
                type: 'POST',
                url:   'eliminar.php',
                data: {'identificador': identificador},
                success: function(data){
                    location.href = "listaTarifas.php";
                }
            });
        }
    })
});
$("#editTarifa").submit(function(event){
    event.preventDefault();
    var file = new FormData();
    file.append("person", $("#person").val());
    file.append("number", $("#number").val());
    file.append("specialty", $("#specialty").val());
    file.append("rol", $("#rol").val());
    file.append("fee", $("#fee").val());

    $.ajax({
        type: 'POST',
        url: 'actualizarTarifa.php',
        cache: false,
        processData: false,
        contentType: false,
        data: file,
        success: function(data){
            if (data == 0) {
                location.href = "listaTarifas.php";
            } else {
                console.log("Error en la actualización: " + data);
                alert("Error en la actualización: " + data);
            }
        },
        error: function(xhr, status, error) {
            console.log("Error: " + error);
            alert("Error: " + error);
        }
    });
});