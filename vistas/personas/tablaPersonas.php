

<?php 
    include "../../clases/Conexion.php";
    $conexion = new Conexion();
    $con = $conexion->conectar();

    $sql = "SELECT * FROM t_persona";
    $respuesta = mysqli_query($con, $sql);
 ?>


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

        <?php while($ver = mysqli_fetch_array($respuesta)): ?> 
            <tr>
                <td><?php echo $ver['paterno']; ?></td>
                <td><?php echo $ver['materno']; ?></td>
                <td><?php echo $ver['nombre']; ?></td>
                <td><?php echo $ver['email']; ?></td>
                <td><?php echo $ver['telefono']; ?></td>
                <td>
                    <span class="btn btn-warning" data-toggle="modal" data-target="#modalActualizarPersona">
                        Editar
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger" onclick="eliminarPersona()" >Eliminar</span>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){
        $('#personasDataTable').DataTable();
    });
</script>