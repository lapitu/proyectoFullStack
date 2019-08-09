
<?php 

    include_once PATH_VIEWS . '../common/header.php';
    include ("PATH_HELPERS" . "../../helpers/conexion.php"); 

?>



<body style="cur_inscr">
  

<div class="container" style="background-color: #FEFEF4">
  <div class="row ">

     <?php
      if(isset($_POST['submit'])){
        $id_curso_pres  = mysqli_real_escape_string($mysqli,(strip_tags($_POST['id_curso_pres'], ENT_QUOTES)));
        $tlf  = mysqli_real_escape_string($mysqli,(strip_tags($_POST['tlf'], ENT_QUOTES)));
        $dni  = mysqli_real_escape_string($mysqli,(strip_tags($_POST['dni'], ENT_QUOTES)));
        $estudios  = mysqli_real_escape_string($mysqli,(strip_tags($_POST['estudios'], ENT_QUOTES)));
        $conocimientos  = mysqli_real_escape_string($mysqli,(strip_tags($_POST['conocimientos'], ENT_QUOTES)));
    
        $insert = mysqli_query($mysqli, "INSERT INTO curso_pres(id_curso_pres, tlf, dni, estudios, conocimientos)
                            VALUES(NULL,'$tlf', '$dni', '$estudios', '$conocimientos')") or die(mysqli_error());
            if($insert){
              echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Datos ingresados correctamente</div>';
            }else{
              echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, datos no ingresados</div>';
            }
        
      }
      ?>

    <form name="form1" id="form1" class="form-horizontal" method="POST" action="helpers/guarda.php">

      <div class="control-group">        
        <label class="control-label" for="tel">Teléfono</label> 
        <input id="tel" name="tel" type="text" aria-describedby="telHelpBlock" required="required" class="form-control span8 tip"> 
        <span id="telHelpBlock" class="form-text text-muted">ejemplo(11-5551234)</span>
      </div>

      <div class="control-group">
        <label class="control-label" for="dni">Dni</label> 
        <input id="dni" name="dni" type="number" class="form-control span8 tip" required>
      </div>

      <div class="control-group">
        <label class="control-label" for="estudios">Estudios alcanzados</label> 
        <div>
          <select id="estudios" name="estudios" class="custom-select" required>
            <option value="primario">Primario</option>
            <option value="secundario">Secundario</option>
            <option value="terciario">Terciario</option>
            <option value="universitario">Universitario</option>
          </select>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="conocimientos">Conocimientos en it</label> 
        <textarea id="conocimientos" name="conocimientos" cols="40" rows="5" class="form-control span8 tip" aria-describedby="conoc_infHelpBlock" required></textarea> 
        <span id="conoc_infHelpBlock" class="form-text text-muted">Mención breve</span>
      </div>
 
      <div class="control-group">
         <div class="controls">
        <button name="submit" type="submit" id="input" class="btn btn-primary">Submit</button>

      </div>
    </form>

  </div>
</div> <!--cierre container -->



<?php
  include_once PATH_VIEWS . '/common/footer.php';


