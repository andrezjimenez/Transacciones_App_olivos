<?php
    class usuarios {
        public function registrar($conexion,$nombre,$apellido,$email,$pass,$ciudad){
            $query="insert into user (nombre,apellido,email,pass,ciudad,tipo,fecha_creacion) values ('$nombre','$apellido','$email','$pass','$ciudad',2,NOW())";
            $consulta=mysqli_query($conexion,$query);
            if($consulta){
                $respuesta="Usuario  Registrado Exitosamente";
                //header("location:../index.html");  
            }else{
                $respuesta="Problema al Registrar Usuario";
            }
            return $respuesta;
        }

        public function buscar_login($conexion,$email,$pass){
            $query="Select nombre, apellido, email, ciudad,tipo from user where email= '$email' and pass = '$pass'";
            $consulta=mysqli_query($conexion,$query);

            
            $filas = mysqli_num_rows($consulta);
            
            if($filas > 0){
                $respuesta=$consulta;
                header("location:../bienvenido.html?=saludo=$respuesta");  
                
            }else{
                $respuesta= "Error";
            }
            
        }
        public function Registrar_informacion (){
            
        }
  
    }