<?php
include('include/header.php');
?>
<section id="contacto">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div id="gMap"></div>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 informacion_contacto">
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 informacion">
				<h1>Horario de oficina</h1>
				<hr>
				<h2>Lunes a Viernes<br><b>9:00 a.m a 6:00 p.m</b></h2>
				<h1>Contáctanos</h1>
				<h2>Correo: <a href="mailto:salas-rodriguez@hotmail.com">salas-rodriguez@hotmail.com</a></h2>
				<h2>Número celular: 9992-73-39-05</h2>
				<hr>
				<form action="formulario.php" method="post">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 formulario">
						<input type="text" name="nombre" placeholder="Nombre" class="input" required>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 formulario">
						<input type="text" name="telefono" placeholder="Teléfono" class="input" required>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 formulario">
						<input type="text" name="asunto" placeholder="Asunto" class="input" required>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 formulario">
						<input type="text" name="correo" placeholder="Correo" class="input" required>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 formulario">
						<input type="text" name="paquete" placeholder="Paquete" class="input" required>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 formulario">
						<textarea name="mensaje" placeholder="Mensaje" class="mensaje" required></textarea>
						<p>Especifica lo que necesitas en tu sitio web, nos pondremos en contacto con usted.</p>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boton">
						<button class="btn" id="boton" name="boton" type="sumit"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
					</div>
				</form>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 foto_contacto">
				
			</div>
		</div>
	</div>
</section>
	

<?php include('include/footer.php'); ?>

<?php include('include/scripts.php'); ?>
   

    
</body>
</html>