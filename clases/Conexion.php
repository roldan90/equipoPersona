

<?php 

    class Conexion {
        public function conectar() {
            $conexion = mysqli_connect("localhost",
                                        "id17010864_roldan",
                                        "PrograWeb_2021",
                                        "id17010864_unidad4");
            return $conexion;
        }
    }
?>