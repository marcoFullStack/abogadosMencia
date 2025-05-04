$("#listatabla").on("click",".btnEliminar",function(){
    let identificador = $(this).parents("tr").find("td").eq(3).text();
    let person = $(this).parents("tr").find("td").eq(1).text();
    Swal.fire({
        icon: 'question',
        title: 'CONFIRMAR',
        html: 'Confirmar la eliminación de la consulta <b>' + person + "</b>",
        showCancelButton: true,
        confirmButtonText: "SI BORRAR",
        cancelButtonText: "NO CANCELAR"
    }).then((response)=>{
        if (response.isConfirmed) {
            $.ajax({
                type: 'POST',
                url:   'eliminarConsulta.php',
                data: {'identificador': identificador},
                success: function(data){
                    location.href = "listaConsulta.php";
                }
            });
        }
    })
});