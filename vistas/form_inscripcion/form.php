<?php 
    include_once PATH_VIEWS . '/common/header.php';
?>

<body style="cur_inscr">
  

<div class="container" style="background-color: #FEFEF4">
  <div class="row ">

     <?php
      if(isset($_POST['submit'])){
        $inscripcion  = mysqli_real_escape_string($mysqli,(strip_tags($_POST['descripcion'], ENT_QUOTES)));
    
        $insert = mysqli_query($mysqli, "INSERT INTO actividad_deportiva(id_actividad, descripcion)
                            VALUES(NULL,'$inscripcion')") or die(mysqli_error());
            if($insert){
              echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Datos ingresados correctamente</div>';
            }else{
              echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, datos no ingresados</div>';
            }
        
      }
      ?>



    <form>
      <div class="form-group">        
        <label for="tel">Teléfono</label> 
        <input id="tel" name="tel" type="text" aria-describedby="telHelpBlock" required="required" class="form-control"> 
        <span id="telHelpBlock" class="form-text text-muted">ejemplo(11-5551234)</span>
      </div>

      <div class="form-group">
        <label for="dni">Dni</label> 
        <input id="dni" name="dni" type="text" class="form-control">
      </div>

      <div class="form-group">
        <label for="direccion">Dirección</label> 
        <input id="direccion" name="direccion" type="text" required="required" class="form-control">
      </div>

      <div class="form-group">
        <label for="direccion">Localidad</label> 
        <input id="direccion" name="direccion" type="text" required="required" class="form-control">
      </div>

      <div class="form-group">
        <label for="estudios">Estudios alcanzados</label> 
        <div>
          <select id="estudios" name="estudios" class="custom-select">
            <option value="primario">Primario</option>
            <option value="secundario">Secundario</option>
            <option value="terciario">Terciario</option>
            <option value="universitario">Universitario</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="est_est">Estado de los estudios</label> 
        <div>
          <select id="est_est" name="est_est" class="custom-select">
            <option value="terminado">Terminado</option>
            <option value="en_curso">En curso</option>
            <option value="incompleto">Incompleto</option>
          </select>
        </div>
      </div>
      
      <div class="form-group">
        <label for="conoc_inf">Conocimientos en it</label> 
        <textarea id="conoc_it" name="conoc_inf" cols="40" rows="5" class="form-control" aria-describedby="conoc_infHelpBlock"></textarea> 
        <span id="conoc_infHelpBlock" class="form-text text-muted">Mención breve</span>
      </div>
      <div class="form-group">
        <label for="xq_estudiar">Razones que te motivan a incluirte</label> 
        <textarea id="xq_estudiar" name="xq_estudiar" cols="40" rows="5" class="form-control"></textarea>
      </div> 
      <div class="form-group">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>


  </div>
</div> <!--cierre container -->



<?php
  include_once PATH_VIEWS . '/common/footer.php';


