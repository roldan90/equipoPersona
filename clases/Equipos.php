<?php 

    include "Conexion.php";

    class Equipos extends Conexion {

        public function obtenerPersonas() {
            $conexion = Conexion::conectar();

            $sql = "SELECT id_persona,
                            CONCAT(paterno, ' ' , 
                                    materno, ' ',
                                    nombre) as nombre 
                    FROM t_persona";
            $respuesta = mysqli_query($conexion, $sql);

            $controlCadena = '<select name="idPersona" id="idPersona" class="form-control">';

            while($ver = mysqli_fetch_array($respuesta)) {
                $controlCadena .= '<option value="' . $ver['id_persona'] . '"> ' . 
                                        $ver['nombre'] . 
                                    '</option>';  
            }

            return $controlCadena . "</select>";
        }

        public function agregarEquipo($idPersona, $nombreEquipo, $modelo, $numeroSerie) {
            $conexion = Conexion::conectar();

            $sql = "INSERT INTO t_equipo_computo (id_persona, 
                                                    nombre, 
                                                    modelo, 
                                                    numero_serie) 
                    VALUES ('$idPersona', 
                            '$nombreEquipo', 
                            '$modelo', 
                            '$numeroSerie')";
            $respuesta = mysqli_query($conexion, $sql);

            return $respuesta;
        }

    }

?>