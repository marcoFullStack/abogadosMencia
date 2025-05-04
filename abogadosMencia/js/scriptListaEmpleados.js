$("#listatabla").on("click",".btnEliminar",function(){
    let identificador = $(this).parents("tr").find("td").eq(1).text();
    let person = $(this).parents("tr").find("td").eq(0).text();
    Swal.fire({
        icon: 'question',
        title: 'CONFIRMAR',
        html: 'Confirmar la eliminación del empleado <b>' + person + "</b>",
        showCancelButton: true,
        confirmButtonText: "SI BORRAR",
        cancelButtonText: "NO CANCELAR"
    }).then((response)=>{
        if (response.isConfirmed) {
            $.ajax({
                type: 'POST',
                url:   'eliminarEmpleado.php',
                data: {'identificador': identificador},
                success: function(data){
                    location.href = "listEmployees.php";
                }
            });
        }
    })
});
$("#editEmployees").submit(function(event){
    event.preventDefault();
    var file = new FormData();
    file.append("person", $("#person").val());
    file.append("ID", $("#ID").val());
    file.append("position", $("#position").val());
    file.append("associated", $("#associated").val());

    $.ajax({
        type: 'POST',
        url: 'actualizarEmpleado.php',
        cache: false,
        processData: false,
        contentType: false,
        data: file,
        success: function(data){
            if (data == 0) {
                location.href = "listEmployees.php";
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