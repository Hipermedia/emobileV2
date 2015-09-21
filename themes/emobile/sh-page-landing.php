<?php
/**
 * Template Name: Landing Page
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
		<section class="landing">
		<?php while ( have_posts() ) : the_post(); ?>
			<section class="bloque primero">
				<div class="wrapper">
					<div class="texto">
						<h2>Lorem ipsum.</h2>
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>	
						<a href="#registrar" class="boton">Registrarse</a>
						<a href="" class="boton" data-toggle="modal" data-target="#entrar">Iniciar sesión</a>
					</div>
					<figure id="ipad" class="imagen">
						<img src="<?php echo get_plantilla_url().'/images/landing/cel_prueba.png'; ?>" alt="">
					</figure>
				</div>
			</section>
			
			<section class="bloque segundo">
				<div class="wrapper">
					<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, quo eum soluta hic.</h3>
					<div class="contenido">
						<figure class="imagen">
							<img src="<?php echo get_plantilla_url().'/images/landing/logo1.png'; ?>" alt="">
						</figure>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, suscipit.</p>
					</div>
					<div class="contenido">
						<figure class="imagen">
							<img src="<?php echo get_plantilla_url().'/images/landing/logo2.png'; ?>" alt="">
						</figure>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, quae?</p>
					</div>
					<div class="contenido">
						<figure class="imagen">
							<img src="<?php echo get_plantilla_url().'/images/landing/logo3.png'; ?>" alt="">
						</figure>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, deleniti!</p>
					</div>
				</div>
			</section>
			
			<section class="bloque pemarte">
				<div class="wrapper">
					<div id="saute1" class="texto">
						<h2>Lorem ipsum dolor.</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores dolore ratione delectus odio magni, tenetur.</p>
						<a href="" class="boton">Ver más</a>
					</div>
				</div>
				<figure class="imagen">
					<img id="saute2" src="<?php echo get_plantilla_url().'/images/landing/education.png'; ?>" alt="">
				</figure>
			</section>
			
			<section class="bloque pemarte">
				<div class="wrapper">
					<div id="saute3" class="texto">
						<h2>Lorem ipsum dolor.</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque expedita vel adipisci sint, inventore neque!</p>
						<a href="" class="boton">Ver más</a>
					</div>
				</div>
				<figure class="imagen">
					<img id="saute4" src="<?php echo get_plantilla_url().'/images/landing/education.png'; ?>" alt="">
				</figure>
			</section>
			
			<section class="bloque pemarte">
				<div class="wrapper">
					<div id="saute5" class="texto">
						<h2>Lorem ipsum dolor.</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias voluptatem, veniam, ipsam voluptatibus cumque non!</p>
						<a href="" class="boton">Ver más</a>
					</div>
				</div>
				<figure class="imagen">
					<img id="saute6" src="<?php echo get_plantilla_url().'/images/landing/education.png'; ?>" alt="">
				</figure>
			</section>

			<section class="bloque final">
				<div class="wrapper">
					<figure class="imagen">
						<img src="<?php echo get_plantilla_url().'/images/landing/cloud.png'; ?>" alt="">
					</figure>
					<div class="texto">
						<h2>Lorem ipsum dolor sit.</h2>
						<h3>Lorem ipsum dolor sit amet.</h3>
						<a href="" class="boton">Ver más</a>
					</div>
				</div>
			</section>

			<section class="bloque registro">
				<a name="registrar"></a>
				<div class="wrapper">
					<div class="registro-form">
						<h2>Registro</h2>
						<?php echo do_shortcode('[in_custom_registration]'); ?>
					</div>
					<figure>
						<img src="<?php echo get_plantilla_url().'/images/landing/cloud.png'; ?>" alt="">
					</figure>
				</div>
			</section>
		<?php endwhile; // end of the loop. ?>

<!-- ////////////////////////////////////////////////////////// -->
			<!-- Modales -->
			<!-- Iniciar sesión -->
			<div class="modal fade" id="entrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-sm" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h4 class="modal-title" id="myModalLabel">Iniciar sesión</h4>
			      </div>
			      <div class="modal-body">
			      	<?php 
			      	    $args = array(
			      	                'form_id'        => 'loginform-home',
			      	                'label_username' => __( 'Usuario' ),
			      	                'label_password' => __( 'Contraseña' ),
			      	                'label_remember' => __( 'Recuérdame' ),
			      	                'label_log_in'   => __( 'Ingresar' ),
			      	        );
			      	wp_login_form( $args ); ?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        <!-- <button type="button" class="btn btn-primary">Ingresar</button> -->
			      </div>
			    </div>
			  </div>
			</div>
<!-- //////////////////////////////////////////////////////////// -->
		</section>
	</div><!-- #content -->
</div><!-- #primary -->

<div id="main" class="group container">

<?php themejs(); ?>
<?php waypoints(); ?>
<?php get_footer(); ?>

