<?php
include('include/header.php');
?>
<section id="contacto">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.141524011924!2d-89.62325458538832!3d20.94683099594676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56718165513587%3A0xa5162a9eb5bf2f99!2sC.%2050%20653%2C%20Centro%2C%2097000%20M%C3%A9rida%2C%20Yuc.!5e0!3m2!1sen!2smx!4v1632426387289!5m2!1sen!2smx" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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