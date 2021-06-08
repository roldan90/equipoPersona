function agregarEquipo(){
    
}

function eliminarEquipo(){
    swal({
        title: "Estas seguro de eliminar este equipo?",
        text: "Una vez eliminado, no podra recuperarse el registro!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            
        } 
    });
}