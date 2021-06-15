
$(document).ready(function(){
    $('#tablaEquipoLoad').load('vistas/equipos/tablaEquipos.php');
    $('#personasExistentes').load('vistas/equipos/listaPersonas.php');
    cargarListaPersonas();
});


function agregarEquipo(){

    $.ajax({
        type:"POST",
        data: $('#frmAgregarEquipo').serialize(),
        url: "procesos/equipos/agregarEquipo.php",
        success:function(respuesta) {
            if (respuesta == 1) {
                $('#tablaEquipoLoad').load('vistas/equipos/tablaEquipos.php');
                swal(":D","agregado con exito!","success");
            } else {
                swal(":(","No se pudo agregar! " + respuesta ,"error");
            }
        }
    });
    
    return false;
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

function cargarListaPersonas() {
    $.ajax({
        url:"procesos/equipos/cargarPersonas.php",
        success:function(respuesta) {
            respuesta = respuesta.trim();
            $('#personasExistentes').html(respuesta);
        }
    });
}

