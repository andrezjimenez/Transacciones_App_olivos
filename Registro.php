<?php
    include "clases/conexion.php";

    $objConexion = new conexion();
    $conexion = $objConexion->conectar();



    $query="SELECT * FROM City order by 2";
    $consulta=mysqli_query($conexion,$query);
    //echo $query;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrese - Los Olivos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="estilos_login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estilos_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estilos_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estilos_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estilos_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="estilos_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estilos_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estilos_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="estilos_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="estilos_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="estilos_login/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #f7f7f7;">

<div class="container" >
    <div  align="center"  > 
    <img src="estilos_login/images/img/logo.png" height="150" width="230">

        <h4 style="padding: 1% 1% 0%;"> Registro</h4> <br>
        
    </div>
    <form  action="controlador/registrar_usuario.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Nombres</label>
            <input type="text" class="form-control form-control-sm" id="Nombres" name="Nombres" placeholder="Nombres" required>
            </div>

            <div class="form-group col-md-6">
            <label for="inputEmail4">Apellidos</label>
            <input type="text" class="form-control form-control-sm" id="Apellidos" name="Apellidos" placeholder="Apellidos" required>
            </div>

            <div class="form-group col-md-6">
            <label for="inputPassword4">Correo Electronico (Sera el usuario de ingreso)</label>
            <input type="email" class="form-control form-control-sm" id="email" name="Email" placeholder="Correo Electronico" required>
            </div>

            <div class="form-group col-md-4">
            <label for="inputState" >Ciudad</label>
            <select id="Ciudad" class="form-control form-control-sm" name="Ciudad" required>
                <option value="" selected>Seleccione..</option>
                <?php
                     while($resultados2=mysqli_fetch_array($consulta)){                
                ?>
                <option value="<?php echo $resultados2['idCity'];?>"> <?php echo $resultados2['CityName'];?></option>
                <?php    
                    }
                ?>   
            </select>
            </div>

            <div class="form-group col-md-6">
            <label for="inputEmail4">Contraseña</label>
            <input type="Password" class="form-control form-control-sm" id="Contraseña" name="Contrasena" placeholder="Contraseña" required>
            </div>

            <div class="form-group col-md-6">
            <label for="inputEmail4">Repetir Contraseña</label>
            <input type="Password" class="form-control form-control-sm" id="Contraseña2" name="Contrasena2" placeholder="Contraseña" required>
            </div>
        </div>
        <button name="send_information"type="submit" class="btn btn-success btn-lg btn-block btn-sm">Registrarse </button>
    </form>
    <br>
    <button type="submit" class="btn btn-danger btn-sm btn-lg btn-block" onclick="location='index.html'">Volver</button>

  
</div>
	
	
<!--===============================================================================================-->
<script src="estilos_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="estilos_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="estilos_login/vendor/bootstrap/js/popper.js"></script>
	<script src="estilos_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="estilos_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="estilos_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="estilos_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="estilos_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="estilos_login/js/main.js"></script>

</body>
</html>