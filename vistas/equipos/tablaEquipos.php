<div class="table table-responsive">
    <table class="table table-condensed table-hover" id="equiposDataTable">
        <thead>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Modelo</th>
            <th>Numero de serie</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <span class="btn btn-warning" data-toggle="modal" data-target="#modalActualizarEquipo">
                        Editar
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger" onclick="eliminarEquipo()">
                        Eliminar
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){
        $('#equiposDataTable').DataTable();
    });
</script>