<?php

    include "../clases/conexion.php";
    include "../clases/usuarios.php";
    
    $objConexion = new conexion();
    $conexion = $objConexion->conectar();

    $objUsuario = new usuarios();
    
    $respuesta=$objUsuario->registrar($conexion, $_POST['Nombres'],$_POST['Apellidos'],$_POST['Email'],$_POST['Contraseña'],$_POST['Ciudad']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrese - Los Olivos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="/image/png" href="../estilos_login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../estilos_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../estilos_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../estilos_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../estilos_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../estilos_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../estilos_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../estilos_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../estilos_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../estilos_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../estilos_login/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #f7f7f7;">

<div class="container" >
    <br>

<div class="alert alert-success" role="alert">

            <h3 class="cover-heading"><?php echo $respuesta?></h3><br>
            <button type="button" class="btn btn-primary btn-sm" onclick = "location='../index.html'" > Volver </button>
</div>
     




</div>
	
	
    <!--===============================================================================================-->
        <script src="../estilos_login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="../estilos_login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="../estilos_login/vendor/bootstrap/js/popper.js"></script>
        <script src="../estilos_login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="../estilos_login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="../estilos_login/vendor/daterangepicker/moment.min.js"></script>
        <script src="../estilos_login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="../estilos_login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="../estilos_login/js/main.js"></script>
    
    </body>
</html>