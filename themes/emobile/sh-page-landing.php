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
						<a href="" data-toggle="modal" data-target="#first-block" class="boton">Ver más</a>
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
						<a href="" data-toggle="modal" data-target="#second-block" class="boton">Ver más</a>
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
						<a href="" data-toggle="modal" data-target="#third-block" class="boton">Ver más</a>
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
						<a href="" data-toggle="modal" data-target="#final-block" class="boton">Ver más</a>
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

			<!-- Primer bloque -->
			<div class="modal fade" id="first-block" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h4 class="modal-title" id="myModalLabel">Primer modal</h4>
			      </div>
			      <div class="modal-body">
			      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi fuga ullam quam quis nam, quibusdam magni voluptates ducimus, cupiditate sed possimus quae placeat nihil expedita dolor est aliquam rem libero. Beatae odit magnam doloribus velit cupiditate ea accusamus, delectus soluta.
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        <!-- <button type="button" class="btn btn-primary">Ingresar</button> -->
			      </div>
			    </div>
			  </div>
			</div>

			<!-- Segundo bloque -->
			<div class="modal fade" id="second-block" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h4 class="modal-title" id="myModalLabel">Segundo modal</h4>
			      </div>
			      <div class="modal-body">
			      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, modi, cum. Assumenda delectus libero autem omnis officia repudiandae magni, similique illo. Et, quidem. Officiis debitis, quo quaerat reiciendis corrupti, laudantium voluptatum, enim dolorum, beatae minima dicta sapiente fugiat itaque qui architecto labore. Excepturi reiciendis fugit minima quae, consequatur ea, facilis.
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        <!-- <button type="button" class="btn btn-primary">Ingresar</button> -->
			      </div>
			    </div>
			  </div>
			</div>

			<!-- Tercer bloque -->
			<div class="modal fade" id="third-block" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h4 class="modal-title" id="myModalLabel">Tercer modal</h4>
			      </div>
			      <div class="modal-body">
			      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, necessitatibus cumque! Illo error sint eveniet veniam quidem in ad maiores quo nesciunt delectus magnam ea sunt cumque qui expedita laborum odit maxime a, consequatur aspernatur autem omnis dicta. Consequuntur, enim.
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        <!-- <button type="button" class="btn btn-primary">Ingresar</button> -->
			      </div>
			    </div>
			  </div>
			</div>

			<!-- Bloque final -->
			<div class="modal fade" id="final-block" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h4 class="modal-title" id="myModalLabel">Modal final</h4>
			      </div>
			      <div class="modal-body">
			      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti saepe dolore voluptas, recusandae quia, quaerat veritatis aperiam? Illum praesentium natus in labore, at harum hic quisquam consequuntur ad, architecto atque.
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

