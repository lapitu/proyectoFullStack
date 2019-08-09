<?php
	include_once PATH_VIEWS . '/common/header.php';
?>


 <?php

   if(!isset($_SESSION['usuario'])){?>
	
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Contenido restringido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Necesario iniciar sesion para acceder a éste contenido</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>
	<div class="text-center pt-4">
   	<h1>Necesario iniciar sesion para acceder a éste contenido</h1>
    </div>

   <?php

   }
    
    else{
		
    ?>


<div class="container-fluid">
	<div id="img_cursos">
		<div class="col_cursos">
			<h1 id="cursos">CURSOS</h1>
		</div>
	</div> <!-- titulo cursos e img -->
</div> <!-- cierre container -->

<div class="container-fluid pt-5 pb-5" style="background-color: #FEFEF4">
	<div class="row d-flex justify-content-around mb-3">

		<div class="card col-xl-3 pt-2"> <!-- card1 -->
			<iframe width="345" height="170" src="https://www.youtube.com/embed/QC9_8nRNNHA?list=PLU8oAlHdN5BnX63lyAeV0LzLnpGudgRrK" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			<div class="card-body">
				<h3 class="card-title text-center text-uppercase">Curso HTML 5</h3>
					<ul>
						<p>Temario:</p>
						<li>Aprender qué es HTML (lenguaje de etiquetas que encierra CSS y Javascript).</li>
						<li> La Estructura de un documento HTML (etiquetas básicas de estructura, estructura de cabecera y estructura del cuerpo).</li>
						<li>Las diferencias entre la versión actual (HTML5) y versiones anteriores</li>
					</ul>
			</div>
		</div>	<!-- card1 -->


		<div class="card col-xl-3 pt-2"> <!-- card2 -->
			<iframe width="345" height="170" src="https://www.youtube.com/embed/6EBNIgkrU74?list=PLU8oAlHdN5BmpIQGDSHo5e1r4ZYWQ8m4B" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<div class="card-body">
					<h3 class="card-title text-center text-uppercase">Curso de C#</h3>
						<ul>
							<p>Temario:</p>
							<li>Sintaxis del lenguaje (variables, operadores, expresiones, bucles, condicionales)</li>
							<li>POO (clases, objetos, arrays, herencia, excepciones, etc.)</li>
							<li>características avanzadas (propiedades, indexaciones, tipos genéricos, colecciones, sobrecargas, trabajo con archivos, serialización, etc.)</li>
							<li>Contrucción de aplicaciones para Windows 10 (interfaces de usuario, BBDD, integración con Windows Store, etc.)</li>
						</ul>
				</div>	
		</div>	<!-- card2 -->

		<div class="card col-xl-3 pt-2"> <!-- card3 -->
			<iframe width="345" height="170" src="https://www.youtube.com/embed/G2FCfQj-9ig?list=PLU8oAlHdN5BlvPxziopYZRd55pdqFwkeS" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
				<div class="card-body">
					<ul>
						<h3 class="card-title text-center text-uppercase">Curso de Python</h3>
							<p>Temario:</p>
							<li>Introducción (requisitos previos, instalación de software)</li>
							<li>Fundamentos y sintáxis básica del lenguaje</li>
							<li>POO con Python</li>
							<li>Algoritmos, listas y tramos</li>
							<li>BBDD</li>
							<li>Trabajo con gráficos y contenidos</li>
							<li>Procesos y tareas</li>
							<li>Programación de red. Sockets</li>
							<li>Ejercicios prácticos</li>
					</ul>

				</div>
		</div>	<!-- card3 -->

	</div> <!-- cierre de row -->

	<div class="row d-flex justify-content-around mb-3">

		<div class="card col-3 pt-2"> <!-- card4 -->
			<iframe width="345" height="170" src="https://www.youtube.com/embed/4nkchdenw-U?list=PLU8oAlHdN5BmpUDdnWSglIIHfIosElaVN" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div class="card-body">
					<h3 class="card-title text-center text-uppercase">Curso de CSS avanzado con Dreamweaver CS5</h3>
						<ul>
							<p>Temario:</p>
							<li>Fundamentos del CSS</li>
							<li>Creación de estilos y hojas de estilos</li>
							<li>Selectores</li>
							<li>Herencia de estilos</li>
							<li>Cascada de estilos</li>
							<li>Márgenes, rellenos y bordes</li>
							<li>Manipulación de imágenes</li>
							<li>Estructura de páginas Web</li>
						</ul>
				</div>
		</div>	<!-- card4 -->

		<div class="card col-3 pt-2"> <!-- card5 -->
			<iframe width="345" height="170" src="https://www.youtube.com/embed/coK4jM5wvko?list=PLU8oAlHdN5BktAXdEVCLUYzvDyqRQJ2lk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div class="card-body">
					<ul>
						<h3 class="card-title text-center text-uppercase">Curso de Java</h3>
						<p>Temario:</p>
						<li>Estructuras principales del lenguaje</li>
						<li>Objetos y clases</li>		
						<li>Herencia</li>
						<li>Clases internas e interfaces</li>
						<li>Programación de gráficos</li>
						<li>Eventos</li>
						<li>Comprontentes Swing</li>
						<li>Aplicaciones y Applets</li>
						<li>Tratamientos de errores y depuración</li>
						<li>Programación genérica</li>
						<li>Multithreding</li>
					</ul>
				</div>	
		</div>	<!-- card5 -->

		<div class="card col-3 pt-2"> <!-- card6 -->
			<iframe width="345" height="170" src="https://www.youtube.com/embed/0sHSrqyZCnM?list=PLU8oAlHdN5Bk-qkvjER90g2c_jVmpAHBh" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div class="card-body">
					<h3 class="card-title text-center text-uppercase">Curso Laravel</h3>
						<ul>
							<p>Temario:</p>
							<li>Introducción, instalación del entrno de desarrollo y enrutamiento</li>
							<li>Controladores</li>
							<li>Vistas</li>
							<li>Motor de plantillas</li>
							<li>BBDD y consultas SQL</li>
							<li>Mapeos de datos y relaciones con Eloquent</li>
							<li>Validación de formularios</li>
							<li>Subir archivos</li>
							<li>Login.sesiones y seguridad</li>
							<li>Control de versión con GIT y GITHUB</li>
						</ul>
				</div>	
		</div>	<!-- card6 -->


	</div> <!-- cierre row -->
</div> <!-- cierre container -->



	<!-- SEDES -->

	<div id="tit_cur_pres">

		<h1 class="text-center wow bounceInUp"><u>Cursos presenciales</u></h1>

	</div>

	<div id=sedes class="container-fluid pb-5 sedes">
		<div class="row d-flex justify-content-around">

			<div class="card col-xl-3 col-md-5 col-10 mt-3 pt-3"> <!-- card1 -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3287.793197203759!2d-58.53483108423922!3d-34.50812675995458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb08cda3366b7%3A0x29324557b5f9bd2f!2sEdison+3243%2C+Mart%C3%ADnez%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1564789004817!5m2!1ses-419!2sar" frameborder="0" style="border:0" allowfullscreen></iframe>
				<div class="card-body">
					<ul class="list-unstyled datos_cur">
					<p><u>Sede San Isidro</u></p>
					<li>Dirección: Av. Edison 3243, Martínez</li>
					<li>Contacto: 0800 222 5367</li>
					</ul>
					<h2 class="card-title text-center text-uppercase">Curso de C++</h2>
					<p>Contenido:</p>
					<ul>
						<li>Introducción y Entrada-Salida</li>
						<li>Expresiones o Operadores</li>
						<li>Condicionales</li>
						<li>Bucles o Ciclos</li>
						<li>Arreglos</li>
						<li>Matrices o Tablas</li>
						<li>Cadenas</li>
					</ul>
						<a href="index.php?m=form_inscripcion" class="btn btn_incluite float-right" style="color:white">incluite</a>

					
				</div>
			</div>	<!-- card1 -->


			<div class="card col-xl-3 col-md-5 col-10 mt-3 pt-3"> <!-- card2 -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.315385779763!2d-58.37626828429857!3d-34.62146946594552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb2cf334684f%3A0x9486a24e4b78cb7!2sPer%C3%BA+1156%2C+C1068AAN+CABA!5e0!3m2!1ses-419!2sar!4v1564789145845!5m2!1ses-419!2sar" frameborder="0" style="border:0" allowfullscreen></iframe>		
						<div class="card-body">
							<ul class="list-unstyled datos_cur">
							<p><u>Sede San Juan</u></p>
							<li>Dirección: Perú 1156, CABA</li>
							<li>Contacto: 0800 222 5367</li>
							</ul>
							
						<h2 class="card-title text-center text-uppercase">Curso de c#</h2>
							<p>Contenido:</p>
							<ul>
								<li>Variables, operadores y expresiones</li>
								<li>Métodos</li>
								<li>Enunciado If, ciclos</li>
								<li>Excepciones</li>
								<li>Uso de clases</li>
								<li>Tipos valor y tipos referencia</li>
								<li>Enumeraciones, estructuras</li>
							</ul>

						<a href="index.php?m=form_inscripcion" class="btn btn_incluite float-right" style="color:white">incluite</a>
					</div>	
			</div>	<!-- card2 -->

			<div class="card col-xl-3 col-md-5 col-10 mt-3 pt-3"> <!-- card3 -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.0028332482566!2d-58.431976984298934!3d-34.604089865025934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca6f76a3a5f9%3A0xb082c37278cfa0c7!2sSarmiento+4564%2C+C1197AAR+CABA!5e0!3m2!1ses-419!2sar!4v1564789221480!5m2!1ses-419!2sar" frameborder="0" style="border:0" allowfullscreen></iframe>
						<div class="card-body">
							<ul class="list-unstyled datos_cur">
							<p><u>Sede Sarmiento</u></p>
							<li>Dirección: Sarmiento 4564, CABA</li>
							<li>Contacto: 0800 222 5367</li>
							</ul>
							<h2 class="card-title text-center text-uppercase">Curso de java</h2>
							<p>Contenido:</p>
							<ul>
								<li>Sintaxis básica</li>
								<li>Estructuras de control</li>
								<li>Arrays</li>
								<li>Creación de clases</li>
								<li>Cadenas de caracteres</li>
								<li>Javabeans</li>
								<li>Apéndices</li>
							</ul>
								
						<a href="index.php?m=form_inscripcion" class="btn btn_incluite float-right"style="color:white">incluite</a>
					</div>
			</div>	<!-- card3 -->

		</div> <!-- cierre de row -->

		<div class="row d-flex justify-content-around">
			
						
	</div> <!-- cierre row -->
</div> <!-- cierre container -->

</body>

			<?php

              }
        


	include( PATH_VIEWS . '/common/footer.php' );
?>
