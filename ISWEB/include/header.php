<!DOCTYPE html>
<html lang="en">
  <head>
    
  	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <?php include 'include/metas.php'; ?>

    <title>SK Strategic Programming</title>

<style type="text/css">

.navbar-collapse .collapse { background-color: red; }

/* Color para la letra del menu */
#menu .actual {
	color: #E28636;
}
/* Color para el hover del menu */
a:hover, a:focus {
    color: #E28636 !important;
}
@import url('https://fonts.googleapis.com/css?family=Dosis');
</style>
    
  
  </head>
  <body>
	<header>	


<?php

$actual = explode("/",strrev($_SERVER['PHP_SELF']), -1);
$actual = strrev($actual[0]);
$menu = array("Inicio" => "index.php", "Paquetes" => "paquetes.php", "Contacto" => "contacto.php");

?>

		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand hidden-xs">
							<!--<a href="<?=PATH?>inicio"><img src="<?=PATH?>images/logoweb.png" class="logo"></a>-->
							<h1 style="font-family: 'Dosis', sans-serif;">SK <b style="color: #E28636; font-family: 'Dosis', sans-serif;">Strategic Programming</b></h1>
						</div>
					</div>
					
					<!-- <div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist" id="menu">
							<?  foreach($menu as $nombre=>$archivo) {?>
							<li><a href="<? echo $archivo; ?>" <? if ($actual == $archivo) echo "class=\"actual\""; ?>><? echo $nombre; ?></a></li>
							<?  } ?>					
							</ul>
						</div>
					</div> -->

					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist" id="menu">
								<li role="presentation"><a href="<?=PATH?>index.php" class="active">Inicio</a></li>
								<li role="presentation"><a href="<?=PATH?>paquetes.php">Paquetes</a></li>
								<li role="presentation"><a href="<?=PATH?>contacto.php">Contacto</a></li>
												
							</ul>
						</div>
					</div>

				</div>
			</div>	
		</nav>		
	</header>