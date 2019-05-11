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
    <h3> <img height="30" width="40" src="estilos_login/images/img/registrar.png"> Registrar Plan</h3>
</div>
<form>
        
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Nombre del Plan</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre del Plan">
    </div>
    <br>

    <div class="form-group col-md-6">
      <label>Cantidad de beneficiarios</label>
      <select  class="form-control form-control-sm" name="TipoDocumento" required>
                <option value="1" selected>1</option>
                <option value="2" selected>2</option>
                <option value="3" selected>3</option>
                <option value="4" selected>4</option>
                <option value="5" selected>5</option>
                <option value="6" selected>6</option>
                <option value="7" selected>7</option>
                
            </select>
    </div>

    <div class="form-group col-md-12">
        <label for="exampleFormControlTextarea1">Descripcion del Plan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
  </div>

    <div class="form-group col-md-6">
      <label>Valor del Plan</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="Valor del Plan">
    </div>

    <div class="form-group col-md-6">
      <label>Valor en Letras</label>
      <input type="text " class="form-control" id="inputEmail4" placeholder="Valor en letras">
    </div>

    <div class="form-group col-md-12">
        <label for="exampleFormControlTextarea1">Requisitos o Documentacion Requerida</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
  </div>

  <label class="checkbox-inline">
      <input type="checkbox" checked data-toggle="toggle"> Activo
</label>
  </div>
    <button type="submit" class="btn btn-success"> 
        Crear Plan
        <img height="20" width="20" src="estilos_login/images/icons/agregar.png">     
    </button>
</form>
</div>
<?php
    include "footer.php";
?>