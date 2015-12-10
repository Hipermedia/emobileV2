<?php
/**
 * Template Name: Constancias
 * Description: Página par
 *
 * @package WordPress
 * @subpackage EMobile
 * @since EMobile 1.0
 */

get_header(); ?>

</div>
<div id="">
	<div id="content" role="main">
		<section class="Constancias">
			<figure>
				<img src="<?php echo get_plantilla_url().'/images/constancia.jpg'; ?>" alt="">
				<figcaption>
					<h2>Imprime tu constancia</h2>
				</figcaption>
			</figure>
			
			<section class="wrapper">

				<div class="formulario">
					<p>Constancia del Foro de Innovación en Educación Básica: Tecnología para el Aprendizaje Creativo</p>

					<form class="form-inline" action="" method="POST">
						<figure class="foto">
							<!-- <img src="<?php echo get_plantilla_url().'/images/foro.jpg'; ?>" alt=""> -->
						</figure>
					  	<div class="form-group">
					   		 <label for="exampleInputName2">Ingresa tu RFC: </label>
					   		 <input name="rfc" type="text" class="form-control" id="exampleInputName2" placeholder="">
					 	 </div>
					  	<button name="descargar" type="submit" class="btn btn-default">
					  		<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
					  		Descargar
					  	</button>
					</form>

					<?php
					global $wpdb;
					$rfc = $_POST['rfc'];
					$query = " SELECT nombre FROM constancia_fieb WHERE RFC = '".$rfc."' ";
					$nombre = $wpdb->get_results($query, ARRAY_A);
					foreach ($nombre as $constancia) {
						$imprimir = $constancia['nombre'];
					}
					?>
					
					<h3><?php echo $imprimir; ?></h3>
				</div>
			</section>
		</section>
	</div><!-- #content -->
</div><!-- #primary -->
<div id="main" class="group container">
<?php themejs(); ?>
<?php waypoints(); ?>
<?php get_footer(); ?>

