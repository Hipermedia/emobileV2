<?php
/**
 * Template Name: Buscar planeaciones
 * Description: Página personalizada de ejemplo
 *
 * @package WordPress
 * @subpackage EMobile
 * @since EMobile 1.0
 */

get_header(); ?>
<?php //print_array($_POST); ?>
<?php //show_errors(); ?>
<?php
	$nivel 		= FALSE;
	$grado		= FALSE;
	$asignatura = FALSE;
	$bloque 	= FALSE;
	
	if (isset($_POST)) {
		$nivel 		= $_POST['nivel'];
		$grado		= $_POST['grado'];
		$asignatura = $_POST['asignatura'];
		$bloque 	= $_POST['bloque'];
	}
?>

<?php while ( have_posts() ) : the_post(); ?>
<section id="escritorio"  class="container content">
	<?php get_template_part( 'content', 'page' ); ?>
	<div class="form-group opciones-consulta">
		<form action="" method="post">
			<div class="row group">
				<div class="col-sm-2">
					<label for="nivel">Nivel</label>
					<select id="nivel" class="form-control" name="nivel">
						<option value=""></option>
						<option <?php echo ($nivel == 'Preescolar' ? 'selected' : ''); ?> value="Preescolar">Preescolar</option>
						<option <?php echo ($nivel == 'Primaria' ? 'selected' : '')?> value="Primaria">Primaria</option>
						<option <?php echo ($nivel == 'Secundaria' ? 'selected' : ''); ?> value="Secundaria">Secundaria</option>
					</select>
				</div>

				<div class="grado col-sm-2">
					<label for="grado">Grado</label>
					<select id="grado" class="form-control" name="grado">
						<option value=""></option>
						<option <?php echo ($grado == '1°') ? 'selected' : '' ?> value="1°">1°</option>
						<option <?php echo ($grado == '2°') ? 'selected' : '' ?> value="2°">2°</option>
						<option <?php echo ($grado == '3°') ? 'selected' : '' ?> value="3°">3°</option>
						<option <?php echo ($grado == '4°') ? 'selected' : '' ?> value="4°">4°</option>
						<option <?php echo ($grado == '5°') ? 'selected' : '' ?> value="5°">5°</option>
						<option <?php echo ($grado == '6°') ? 'selected' : '' ?> value="6°">6°</option>
					</select>
				</div>

				<div class="asignatura col-sm-2">
					<label for="asignatura">Asignatura</label>
					<select class="form-control" name="asignatura">
						<option value=""></option>
						<option <?php echo ($asignatura == 'Español') ? 'selected' : '' ?> value="Español">Español</option>
						<option <?php echo ($asignatura == 'Matemáticas') ? 'selected' : '' ?> value="Matemáticas">Matemáticas</option>
					</select>
				</div>
				
				<div class="bloque col-sm-2">
					<label for="bloque">Bloque</label>
					<select class="block form-control" name="bloque">
						<option value=""></option>
						<option <?php echo ($bloque == 'I') ? 'selected' : '' ?> value="I">I</option>
						<option <?php echo ($bloque == 'II') ? 'selected' : '' ?> value="II">II</option>
						<option <?php echo ($bloque == 'III') ? 'selected' : '' ?> value="III">III</option>
						<option <?php echo ($bloque == 'IV') ? 'selected' : '' ?> value="IV">IV</option>
						<option <?php echo ($bloque == 'V') ? 'selected' : '' ?> value="V">V</option>
					</select>
				</div>
				
				<div class="col-sm-2 custom-col">
					<input class="custom-btn btn btn-default btn-sm borrar" type="submit" name="consultar" value="Filtrar">
				</div>
			</div>
		</form>
	</div>


		
<?php
	if (isset($_POST['consultar'])) {
		// Meta keys
		$nivel			= $_POST['nivel'];
		$grado			= $_POST['grado'];
		$asignatura 	= $_POST['asignatura'];
		$bloque 		= $_POST['bloque'];
		$meta_grado		= FALSE;
		$meta_asignatura = FALSE;
		$meta_bloque	= FALSE;

		// Meta vars
		if ($grado) {
			if ($nivel == 'Primaria')
				$suffix = 'pri';
			if ($nivel == 'Secundaria')
				$suffix = 'sec';
				$meta_grado = array( 'key' => 'pl_grado_'.$suffix, 'value' => $grado, 'compare' => '=', );
		}
		if ($asignatura) {
			$meta_asignatura = array( 'key' => 'pl_asignatura', 'value' => $asignatura, 'compare' => '=', );
		}
		
		if ($bloque) {
			$meta_bloque = array( 'key' => 'pl_bloque', 'value' => $bloque, 'compare' => '=', );
		}

		if ($grado OR $asignatura OR $bloque) {
			$meta_query = array( 'meta_query' => array( 'relation' => 'AND', array( 'key' => 'pl_nivel', 'value' => $nivel, 'compare' => '=', ), ) );
		
			if ($grado) { $meta_query['meta_query'][] = $meta_grado; }
			if ($asignatura) { $meta_query['meta_query'][] = $meta_asignatura; }
			if ($bloque) { $meta_query['meta_query'][] = $meta_bloque; }
		
		} else {
			$meta_query = array( /*query prescolar*/ 'meta_key' => 'pl_nivel', 'meta_value' => $nivel, ); 
		}
		//print_array($meta_query);
		$planeaciones = get_plans($meta_query);

		// HE AQUÍ EL RESULTADO.
		if ($planeaciones) {
		} else {
			echo 'No se encontraron planeaciones para tus criterios de búsqueda.';
		}
?>
	<?php //print_array($planeaciones); ?>
	<div id="planeaciones" class="row group">
		<?php if ($planeaciones) { ?>
	   <?php foreach ($planeaciones as $planeacion) { ?>
	   <?php //echo '<pre style="display:block;">'; print_r($planeacion); echo '</pre>'; // PRINT_R ?>
			<div class="col-md-6">
		    	<div class="planeacion">
					<div class="row group">
	
		             <!-- icono de planeación  -->
		            <div class="col-sm-2">
		               <?php if ($planeacion['asignatura'] == 'Español') { ?>
		                  <span class="ico-planeacion ico-esp"></span> 
		               <?php } else { ?>
		                  <span class="ico-planeacion ico-mat"></span> 
		               <?php } ?>
		            </div>

		             <!-- Nivel -->
		            <div class="col-sm-2">
		               <strong><?php echo $planeacion['nivel']; ?></strong>
		            </div>

		            <!-- Grado -->
		            <div class="col-sm-2">
		               <strong class="custom-grado"><?php echo $planeacion['grado']; ?> grado</strong>
		            </div>
	
		             <!-- Asignatura -->
		            <div class="col-sm-3">
		               <strong><?php echo $planeacion['asignatura']; ?></strong>
		            </div>
	
		            <!-- Bloque -->
		            <div class="col-sm-3">
		               <strong><?php echo $planeacion['bloque']; ?> bloque</strong>
		            </div>
		         </div>
	
		         <p class="aprendizaje group"><?php echo $planeacion['topico_generativo']; ?></p>
	
		         <div class="row group">
		         	<div class="col-sm-2">
		         		<i class="fa fa-user fa-x5"></i>
		         	</div>
		         	<div class="col-sm-7">
		         		<strong><a href="<?php echo $planeacion['url_perfil_autor']; ?>"><?php echo $planeacion['autor']; ?></a></strong>
		         	</div>
						<div class="col-xs-3">
						    <a class="btn btn-default btn-sm borrar" href="<?php echo $planeacion['url_imp_pdf']; ?>" target="_blank">
						        <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Descargar
						    </a>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		<?php }?>
	</div> <!-- #planeaciones -->
<?php } else { //if (isset($_POST['consultar'])) { ?>
	<figure class="default-img">
		<img src="<?php print_ot('imagen', ''); ?>" alt="">
	</figure>
<?php } ?>
</section>
<?php endwhile; // end of the loop. ?>
<?php filtrado(); ?>
<?php get_footer(); ?>
