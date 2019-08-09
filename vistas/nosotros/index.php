<?php 
	include_once 'config/config.php';
	include_once PATH_VIEWS . '/common/header.php';
?>


<body style="background-color: #FEFEF4">
	<div class="container w-50 pt-5" class="container-fluid pt-5 pb-5">
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  		<div class="carousel-inner">
    	<div class="carousel-item active">
      		<img class="d-block w-100" src="./img/nos_1.jpg" alt="first slide">
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100" src="./img/nos_2.jpg" alt="second slide">
    	</div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/nos_3.jpg" alt="third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/nos_4.jpg" alt="fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/nos_5.jpg" alt="fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/nos_6.jpg" alt="sixth slide">
    </div>
  </div>
</div>
</div> <!-- cierre container -->

	<div class= "nosotros center">
		<h1 class="text-center wow bounceOut" data-wow-delay="0.38s">Nosotros</h1>
		<article>
			<p>
			Nos ofrecemos como el nexo para toda persona que quiera insertarse en el creciente mercado del área de programación y aquellos que quieran ofrecer recursos para lograr tal fin.
			Para eso, compartimos cursos dictados en forma presencial o digital facilitando el acceso al aprendizaje. Porque, nosotros creemos que, si te mueve el deseo de superarte, de aprender, de actualizarte nada te puede detener y te acompañamos en tu proceso para desarrollarte.
			</p>
		</article> 
	</div>	
		

</body>

<?php
	include_once PATH_VIEWS . '/common/footer.php';
?>