$("#listatabla").on("click",".btnEliminar",function(){
    let identificador = $(this).parents("tr").find("td").eq(0).text();
    let name = $(this).parents("tr").find("td").eq(1).text();
    Swal.fire({
        icon: 'question',
        title: 'CONFIRMAR',
        html: 'Confirmar la eliminación de la consulta <b>' + name + "</b>",
        showCancelButton: true,
        confirmButtonText: "SI BORRAR",
        cancelButtonText: "NO CANCELAR"
    }).then((response)=>{
        if (response.isConfirmed) {
            $.ajax({
                type: 'POST',
                url:   'eliminarArchivo.php',
                data: {'identificador': identificador},
                success: function(data){
                    location.href = "listArchivos.php";
                }
            });
        }
    })
});