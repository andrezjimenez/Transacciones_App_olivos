<?php

    include "../clases/conexion.php";
    //include "../clases/usuarios.php";
    
    $objConexion = new conexion();
    $conexion = $objConexion->conectar();

        echo "Se hizo consulta";
    // $objUsuario = new usuarios();
    
    // $respuesta=$objUsuario->buscar_login($conexion,$_POST['email'], $_POST['pass']);
    
    echo "Se ejecuto el controlador";

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    echo '<br>';
    echo $_POST['email'];
    echo '<br>';

    echo $_POST['pass'];

    echo $respuesta ;
    
//     while($resultados2 = mysqli_fetch_array($respuesta)){
//         echo '<br> el usuario que ingreso ';
//         echo $resultados2['nombre'] ;
//     }

//    // echo $respuesta;        

//     $filas = mysqli_num_rows($respuesta);
//     echo $filas;

    $query="Select nombre, apellido, email, ciudad,tipo from user where email= '$email' and pass = '$pass'";
    $consulta=mysqli_query($conexion,$query);

    $filas = mysqli_num_rows($consulta);
            
    echo $filas;

            if($filas > 0){
                while($resultados2 = mysqli_fetch_array($consulta))
                {
                    header("location:../bienvenido.html");
                    echo '<br> el usuario que ingreso ';
                    echo $resultados2['nombre'] ;
                }

                    
            }else{
                echo "Error";
            }
    
            echo $filas;

?>