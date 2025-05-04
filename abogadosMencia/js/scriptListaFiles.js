$("#listatabla").on("click",".btnEliminar",function(){
    let identificador = $(this).parents("tr").find("td").eq(0).text();
    let person = $(this).parents("tr").find("td").eq(0).text();
    Swal.fire({
        icon: 'question',
        title: 'CONFIRMAR',
        html: 'Confirmar la eliminación del expediente <b>' + person + "</b>",
        showCancelButton: true,
        confirmButtonText: "SI BORRAR",
        cancelButtonText: "NO CANCELAR"
    }).then((response)=>{
        if (response.isConfirmed) {
            $.ajax({
                type: 'POST',
                url:   'eliminarExpediente.php',
                data: {'identificador': identificador},
                success: function(data){
                    location.href = "listaExpediente.php";
                }
            });
        }
    })
});
$("#editFile").submit(function(event){
    event.preventDefault();
    var file = new FormData();
    file.append("id", $("#id").val());
    file.append("name", $("#name").val());
    file.append("number", $("#number").val());
    file.append("DNI", $("#DNI").val());
    file.append("client", $("#client").val());
    file.append("phone_number", $("#phone_number").val());
    file.append("location", $("#location").val());
    file.append("email", $("#email").val());
    file.append("date_in", $("#date_in").val());
    file.append("date_out", $("#date_out").val());
    file.append("date_solution", $("#date_solution").val());
    file.append("judged", $("#judged").val());
    file.append("attendants", $("#attendants").val());
    file.append("helpers", $("#helpers").val());
    file.append("witnesses", $("#witnesses").val());
    file.append("identification", $("#identification").val());
    file.append("evidence", $("#evidence").val());
    file.append("others", $("#others").val());
    file.append("solution", $("#solution").val());
    file.append("pacts", $("#pacts").val());
    file.append("appeals", $("#appeals").val());
    file.append("extra_bill", $("#extra_bill").val());
    file.append("total_bill", $("#total_bill").val());
    file.append("coments", $("#coments").val());

    $.ajax({
        type: 'POST',
        url: 'actualizarExpediente.php',
        cache: false,
        processData: false,
        contentType: false,
        data: file,
        success: function(data){
            if (data == 0) {
                location.href = "listaExpediente.php";
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