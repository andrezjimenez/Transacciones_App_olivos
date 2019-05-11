<?php
    include "MenuPrincipal.html";
    include "clases/conexion.php";

    $objConexion = new conexion();
    $conexion = $objConexion->conectar();

    $query="SELECT * FROM City order by 2";
    $consulta=mysqli_query($conexion,$query);
    //echo $query;
?>
<body>
    
<div class="container" >
    <br>
    <div class="alert alert-warning" role="alert">
    <h3> <img height="30" width="40" src="estilos_login/images/img/registrar.png"> Informacion Personal</h3>
</div>
   

    <form>
        
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Nombres</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nombres">
    </div>
    <div class="form-group col-md-6">
      <label>Apellidos</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Apellidos">
    </div>
    <div class="form-group col-md-6">
      <label>Correo Electronico</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Correo Electronico">
    </div>
    <div class="form-group col-md-6">
      <label>Celular</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="Celular">
    </div>
    <div class="form-group col-md-6">
      <label>Direccion</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Direccion">
    </div>
    <div class="form-group col-md-6">
      <label>Sexo</label>
        <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
            <label class="custom-control-label" for="defaultUnchecked">Femenino</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" checked>
            <label class="custom-control-label" for="defaultChecked">Masculino</label>
        </div>

    </div>
    <div class="form-group col-md-6">
      <label>Fecha de Nacimiento</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="Celular">
    </div>
    <div class="form-group col-md-6">
      <label>Ciudad de Nacimiento</label>
       <select  class="form-control form-control-sm" name="TipoDocumento" required>
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
      <label>Tipo de Documento</label>
      <select  class="form-control form-control-sm" name="TipoDocumento" required>
                <option value="Cedula" selected>Cedula</option>
                <option value="Nit" selected>Nit</option>
                <option value="Cedula Extranjeria" selected>Cedula Extranjeria</option>
                <option value="Pasaporte" selected>Pasaporte</option>
                
            </select>
    </div>
    <div class="form-group col-md-6">
      <label>Numero de Documento</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="Numero de Documento">
    </div>
    <div class="form-group col-md-6">
      <label>Fecha de expedicion del documento</label>
      <input type="date" class="form-control" id="inputEmail4" >
    </div>
    
    

  </div>
  <button type="submit" class="btn btn-success">Actualizar Informacion Personal</button>
</form>
</div>
<?php
    include "footer.php";
?>