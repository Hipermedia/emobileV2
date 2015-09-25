<?php
/**
 * Template Name: Perfil autor
 * Description: Página personalizada de ejemplo
 *
 * @package WordPress
 * @subpackage EMobile
 * @since EMobile 1.0
 */

user_redirect();
get_header(); ?>

		<div id="primary-full">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
				<?php $perfil_autor = perfil_autor( get_query_var('id_autor') );?>
				    <section id="tus-datos"  class="container content">

				        <header class="entry-header">
				            <h1 class="entry-title">Perfil: <?php echo $perfil_autor[p_nombre] . ' ' . $perfil_autor[p_apellido_p] . ' ' . $perfil_autor[p_apellido_m]; ?></h1>
				        </header><!-- .entry-header -->

			            <div id="datos-personales" class="bloque-info row">
			                <h3>Información del autor</h3>
			                <p class="col-md-6"><img class="img-circle" src="<?php echo $perfil_autor[p_foto]; ?>"></p>
			                <p class="col-md-6"><strong>Líder creativo:</strong> <?php echo $perfil_autor[p_lider_c]; ?></p>
			                <p class="col-md-6"><strong>Correo electrónico:</strong> <?php echo $perfil_autor[p_email]; ?></p>
			                <p class="col-md-6"><strong>Nivel:</strong> <?php echo $perfil_autor[p_nivel_se]; ?></p>
			                <p class="col-md-6"><strong>Municipio:</strong> <?php echo $perfil_autor[p_municipio]; ?></p>
			                <p class="col-md-6"><strong>Localidad:</strong> <?php echo $perfil_autor[p_localidad]; ?></p>
			                <p class="col-md-6"><strong>Escuela:</strong> <?php echo $perfil_autor[p_nombre_ct]; ?></p>
			                <p class="col-md-6"><strong>Modalidad:</strong> <?php echo $perfil_autor[p_modalidad]; ?></p>
			                <?php if ($perfil_autor[p_modalidad_eesp]) { ?>
			                	<p class="col-md-6"><strong>Modalidad educación especial:</strong> <?php echo $perfil_autor[p_modalidad_eesp]; ?></p>
			                <?php } ?>
			                <!-- <p class="col-md-6"><strong>Nombre:</strong> <?php //echo $perfil_autor[p_nombre] . ' ' . $perfil_autor[p_apellido_p] . ' ' . $perfil_autor[p_apellido_m]; ?></p> -->
			                <!-- <p class="col-md-6"><strong>CURP:</strong> <?php //echo $perfil_autor[p_curp]; ?></p> -->
			                <!-- <p class="col-md-6"><strong>RFC:</strong> <?php //echo $perfil_autor[p_rfc]; ?></p> -->
			                <!-- <p class="col-md-6"><strong>Sexo:</strong> <?php //echo $perfil_autor[p_sexo]; ?></p> -->
			                <!-- <p class="col-md-6"><strong>Edad:</strong> <?php //echo $perfil_autor[p_edad]; ?></p> -->
			                <!-- <p class="col-md-6"><strong>Teléfono particular:</strong> <?php //echo $perfil_autor[p_telefono_p]; ?></p> -->
			                <!-- <p class="col-md-6"><strong>Teléfono celular:</strong> <?php //echo $perfil_autor[p_telefono_c]; ?></p> -->
			                <!-- <p class="col-md-6"><strong>Sede de capacitación:</strong> <?php //echo $perfil_autor[p_sede_c]; ?></p> -->
			                <!-- <p class="col-md-6"><strong>ID de iCloud:</strong> <?php //echo $perfil_autor[p_cuenta_icloud]; ?></p> -->
			            </div>

				    </section>
					<section id="escritorio"  class="container content">

				        <h2 class="titulo-seccion">Planeaciones del autor</h2>
				        
				        <?php $planeaciones = query_autor_plans( get_query_var('id_autor') ); // Obtengo datos de planeaciones ?>

				        <div id="planeaciones" class="row group">

				            <?php if ($planeaciones) { ?>
				                <?php foreach ($planeaciones as $planeacion) { ?>
				                <?php //echo '<pre style="display:block;">'; print_r($planeacion); echo '</pre>'; // PRINT_R ?>

				                    <div class="col-md-6">
				                        <div class="planeacion">
				                            <div class="row group">
				                                <!-- icono de planeación -->
				                                <div class="col-sm-2">
				                                    <?php if ($planeacion['asignatura'] == 'Español') { ?>
				                                        <span class="ico-planeacion ico-esp"></span> 
				                                    <?php } else { ?>
				                                        <span class="ico-planeacion ico-mat"></span> 
				                                    <?php } ?>
				                                </div>
				                                <!-- Asignatura -->
				                                <div class="col-sm-3">
				                                    <strong><?php echo $planeacion['asignatura']; ?></strong>
				                                </div>
				                                <!-- Grado -->
				                                <div class="col-sm-3">
				                                    <strong><?php echo $planeacion['grado']; ?> grado</strong>
				                                </div>
				                                <!-- Bloque -->
				                                <div class="col-sm-3">
				                                    <strong><?php echo $planeacion['bloque']; ?> bloque</strong>
				                                </div>
				                            </div>
				                            
				                            <p class="aprendizaje group"><?php echo $planeacion['aprendizaje_esp']; ?></p>

				                            <div class="row group">
				                                
				                                <div class="col-xs-3">
				                                    <a class="btn btn-default btn-sm borrar" href="<?php echo $planeacion['url_imp_pdf']; ?>">
				                                        <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> PDF
				                                    </a>
				                                </div>
				                                
				                            </div>
				                        </div>
				                    </div>

				                <?php } ?>
				            <?php }?>

				        </div> <!-- #planeaciones -->
					</section>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>