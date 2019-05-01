<?php
    class usuarios {
        public function registrar($conexion,$nombre,$apellido,$email,$pass,$ciudad){
            $query="insert into user (nombre,apellido,email,contrasena,ciudad,tipo,fecha_creacion) values ('$nombre','$apellido','$email','$pass','$ciudad',2,NOW())";
            $consulta=mysqli_query($conexion,$query);
            if($consulta){
                $respuesta="Usuario  Registrado Exitosamente";
            }else{
                $respuesta="Problema al Registrar Usuario";
            }
            return $respuesta;
        }
  
    }