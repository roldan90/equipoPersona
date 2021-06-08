<div class="table-responsive">
    <table class="table table-condensed table-hover" id="personasDataTable">
        <thead>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <span class="btn btn-warning" data-toggle="modal" data-target="#modalActualizarPersona">
                        Editar
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger" onclick="eliminarPersona()" >Eliminar</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){
        $('#personasDataTable').DataTable();
    });
</script>