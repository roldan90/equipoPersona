

<?php 

    class Conexion {
        public function conectar() {
            $conexion = mysqli_connect("localhost",
                                        "root",
                                        "",
                                        "unidad4");
            return $conexion;
        }
    }
?>