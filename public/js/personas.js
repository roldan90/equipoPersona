function agregarNuevaPersona() {

}

function eliminarPersona(){
    swal({
        title: "Estas seguro de eliminar esta persona?",
        text: "Una vez eliminada, no podra recuperarse el registro!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            
        } 
    });
}