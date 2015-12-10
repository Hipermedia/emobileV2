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
						<h2>Proyecto Educación Mobile</h2>
						<h3>Habilidades Digitales para una Educación de Calidad.</h3>	
						<a href="#registrar" class="boton">Registrarse</a>
						<a href="" class="boton btn-entrar" data-toggle="modal" data-target="#entrar">Iniciar sesión</a>
					</div>
					<figure id="ipad" class="imagen">
						<a href="#foro">
							<img src="<?php echo get_plantilla_url().'/images/landing/mobile.png'; ?>" alt="">
						</a>
					</figure>
					<p class="aviso"><a href="#materiales">Requerimientos para los talleres</a></p>
				</div>
			</section>
			
			<a name="materiales"></a>
			<section class="bloque final">
				<div class="wrapper">
					<h2>¡AVISOS IMPORTANTES!</h2>
					<p>A los participantes del taller Aprendizaje Creativo en el Aula, deberán descargar la aplicación qrafter o en su defecto cualquier otra para lector de códigos QR</p>
					<p>Para todos los asistentes al foro, a nombre de la coordinación del proyecto, les informamos que el foro se realizará en horario de 10:00 a 19:00 hrs, para que prevean el regreso a sus lugares de origen.</p>
					<p>Siendo el registro de participantes de 9:00 a 9:45</p>
					<p>Les recordamos que la justificación para su jornada laboral, será la constancia de participación que se les entregará por su asistencia al foro</p>
					<img src="<?php echo get_plantilla_url().'/images/landing/Requerimientos-para-los-Talleres-1.png' ?>" alt="">
					<img src="<?php echo get_plantilla_url().'/images/landing/Requerimientos-para-los-Talleres-2.png' ?>" alt="">
					<img src="<?php echo get_plantilla_url().'/images/landing/Requerimientos-para-los-Talleres-3.png' ?>" alt="">
				</div>
			</section>
			
			<a name="registrar"></a>
			<section class="bloque registro">
				<div class="wrapper">
					<div class="registro-form">
						<h2>Registro</h2>
						<?php echo do_shortcode('[in_custom_registration]'); ?>
					</div>
					<figure>
						<img src="<?php echo get_plantilla_url().'/images/clasemobile.png'; ?>" alt="">
					</figure>
				</div>
			</section>
			
			<section class="bloque segundo">
				<div class="wrapper">
					<!-- <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, quo eum soluta hic.</h3> -->
					<div class="contenido">
						<figure class="imagen">
							<img src="<?php echo get_plantilla_url().'/images/blocks1.jpg'; ?>" alt="">
						</figure>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, suscipit.</p> -->
					</div>
					<div class="contenido">
						<figure class="imagen">
							<img src="<?php echo get_plantilla_url().'/images/blocks2.jpg'; ?>" alt="">
						</figure>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, quae?</p> -->
					</div>
					<div class="contenido">
						<figure class="imagen">
							<img src="<?php echo get_plantilla_url().'/images/blocks3.jpg'; ?>" alt="">
						</figure>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, deleniti!</p> -->
					</div>
				</div>
			</section>
			
			<section class="bloque pemarte">
				<div class="wrapper">
					<div id="saute1" class="texto">
						<!-- <h2>Taller 1: Creación de Libros con iBooks.</h2> -->
						<!-- <p>Macbook (No indispensable, pero sí la tiene facilitará el trabajo).</p> -->
						<!-- <p>Aplicación ibooks Author.</p> -->
						<!-- <p>Investigación breve e imágenes del tema de su preferencia. (En archivo electrónico).</p> -->
						<!-- <a href="" data-toggle="modal" data-target="#first-block" class="boton">Ver más</a> -->
					</div>
				</div>
				<figure class="imagen">
					<img id="saute2" src="<?php echo get_plantilla_url().'/images/landing/saute1.jpg'; ?>" alt="">
				</figure>
			</section>
			
			<section class="bloque pemarte">
				<div class="wrapper">
					<div id="saute3" class="texto">
						<!-- <h2>Lorem ipsum dolor.</h2> -->
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque expedita vel adipisci sint, inventore neque!</p> -->
						<!-- <a href="" data-toggle="modal" data-target="#second-block" class="boton">Ver más</a> -->
					</div>
				</div>
				<figure class="imagen">
					<img id="saute4" src="<?php echo get_plantilla_url().'/images/landing/saute2.jpg'; ?>" alt="">
				</figure>
			</section>
			
			<section class="bloque pemarte">
				<div class="wrapper">
					<div id="saute5" class="texto">
						<!-- <h2>Lorem ipsum dolor.</h2> -->
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias voluptatem, veniam, ipsam voluptatibus cumque non!</p> -->
						<!-- <a href="" data-toggle="modal" data-target="#third-block" class="boton">Ver más</a> -->
					</div>
				</div>
				<figure class="imagen">
					<img id="saute6" src="<?php echo get_plantilla_url().'/images/landing/saute3.jpg'; ?>" alt="">
				</figure>
			</section>
			
			<a name="foro"></a>
			<section class="bloque final">
				<div class="wrapper">
<!-- 					<figure class="imagen">
						<img src="<?php echo get_plantilla_url().'/images/landing/convocatoria.jpg'; ?>" alt="">
					</figure>
					<div class="texto">
						<h2>Lorem ipsum dolor sit.</h2>
						<h3>Inscríbete al foro</h3>
						<a href="http://goo.gl/forms/rZwrbYyzB0" target="_blank" class="boton">Inscribirse</a>
					</div> -->
					<h2>Lista de Participantes Inscritos al Foro: Innovación en Educación Básica. Tecnología para el Aprendizaje Creativo</h2>
					<STYLE type="text/css">

					body {margin-top: 0px;margin-left: 0px;}

					#page_1 {position:relative; overflow: hidden;margin: 0;padding: 0px;border: none;width: 1099px;}
					#page_1 #dimg1 {position:absolute;top:0px;left:22px;z-index:-1;width:182px;height:43px;}
					#page_1 #dimg1 #img1 {width:182px;height:43px;}
					#page_2 {position:relative; overflow: hidden;margin: 0;padding: 0px;border: none;width: 1099px;}
					#page_2 #dimg1 {position:absolute;top:0px;left:5px;z-index:-1;width:190px;height:49px;}
					#page_2 #dimg1 #img1 {width:190px;height:49px;}
					#page_3 {position:relative; overflow: hidden;margin: 0;padding: 0px;border: none;width: 1225px;}
					#page_3 #dimg1 {position:absolute;top:0px;left:10px;z-index:-1;width:234px;height:49px;}
					#page_3 #dimg1 #img1 {width:234px;height:49px;}
					#page_4 {position:relative; overflow: hidden;margin: 0;padding: 0px;border: none;width: 1220px;}
					#page_4 #dimg1 {position:absolute;top:0px;left:9px;z-index:-1;width:231px;height:49px;}
					#page_4 #dimg1 #img1 {width:231px;height:49px;}
					#page_5 {position:relative; overflow: hidden;margin: 0;padding: 0px;border: none;width: 1103px;}
					#page_5 #dimg1 {position:absolute;top:0px;left:14px;z-index:-1;width:186px;height:48px;}
					#page_5 #dimg1 #img1 {width:186px;height:48px;}
					.dclr {clear:both;float:none;height:1px;margin:0px;padding:0px;overflow:hidden;}

					.ft0{font: bold 15px 'Calibri';line-height: 18px;}
					.ft1{font: italic 15px 'Calibri';line-height: 18px;}
					.ft2{font: 1px 'Arial';line-height: 1px;}
					.ft3{font: 13px 'Calibri';line-height: 15px;}
					.ft4{font: bold 13px 'Arial';line-height: 15px;}
					.ft5{font: 15px 'Calibri';line-height: 18px;}
					.ft6{font: 13px 'Arial';line-height: 15px;}
					.ft7{font: 15px 'Calibri';line-height: 17px;}
					.ft8{font: 13px 'Arial';line-height: 16px;}
					.ft9{font: bold 13px 'Arial';line-height: 16px;}
					.ft10{font: 1px 'Arial';line-height: 2px;}

					.p0{text-align: left;padding-left: 366px;margin-top: 7px;margin-bottom: 0px;}
					.p1{text-align: left;padding-left: 424px;margin-top: 1px;margin-bottom: 0px;}
					.p2{text-align: left;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p3{text-align: left;padding-left: 149px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p4{text-align: right;padding-right: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p5{text-align: left;padding-left: 37px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p6{text-align: left;padding-left: 23px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p7{text-align: left;padding-left: 25px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p8{text-align: left;padding-left: 36px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p9{text-align: left;padding-left: 74px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p10{text-align: left;padding-left: 82px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p11{text-align: right;padding-right: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p12{text-align: left;padding-left: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p13{text-align: left;padding-left: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p14{text-align: left;padding-left: 384px;margin-top: 9px;margin-bottom: 0px;}
					.p15{text-align: left;padding-left: 450px;margin-top: 1px;margin-bottom: 0px;}
					.p16{text-align: left;padding-left: 195px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p17{text-align: left;padding-left: 32px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p18{text-align: left;padding-left: 24px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p19{text-align: left;padding-left: 26px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p20{text-align: left;padding-left: 41px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p21{text-align: left;padding-left: 76px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p22{text-align: left;padding-left: 107px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p23{text-align: left;padding-left: 441px;margin-top: 11px;margin-bottom: 0px;}
					.p24{text-align: left;padding-left: 433px;margin-top: 1px;margin-bottom: 0px;}
					.p25{text-align: left;padding-left: 323px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p26{text-align: left;padding-left: 35px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p27{text-align: left;padding-left: 39px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p28{text-align: left;padding-left: 70px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p29{text-align: left;padding-left: 171px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p30{text-align: left;padding-left: 435px;margin-top: 11px;margin-bottom: 0px;}
					.p31{text-align: left;padding-left: 444px;margin-top: 1px;margin-bottom: 0px;}
					.p32{text-align: left;padding-left: 306px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p33{text-align: right;padding-right: 3px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p34{text-align: left;padding-left: 75px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p35{text-align: left;padding-left: 162px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p36{text-align: left;padding-left: 362px;margin-top: 9px;margin-bottom: 0px;}
					.p37{text-align: left;padding-left: 428px;margin-top: 1px;margin-bottom: 0px;}
					.p38{text-align: left;padding-left: 183px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p39{text-align: left;padding-left: 29px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p40{text-align: left;padding-left: 22px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p41{text-align: left;padding-left: 40px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
					.p42{text-align: left;padding-left: 100px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}

					.td0{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 31px;vertical-align: bottom;}
					.td1{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 145px;vertical-align: bottom;}
					.td2{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 150px;vertical-align: bottom;}
					.td3{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 156px;vertical-align: bottom;}
					.td4{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 108px;vertical-align: bottom;}
					.td5{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 238px;vertical-align: bottom;}
					.td6{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 203px;vertical-align: bottom;}
					.td7{border-left: #000000 1px solid;border-right: #000000 1px solid;border-bottom: #92d050 1px solid;padding: 0px;margin: 0px;width: 29px;vertical-align: bottom;background: #92d050;}
					.td8{border-right: #000000 1px solid;border-bottom: #92d050 1px solid;padding: 0px;margin: 0px;width: 144px;vertical-align: bottom;background: #92d050;}
					.td9{border-right: #000000 1px solid;border-bottom: #92d050 1px solid;padding: 0px;margin: 0px;width: 149px;vertical-align: bottom;background: #92d050;}
					.td10{border-right: #000000 1px solid;border-bottom: #92d050 1px solid;padding: 0px;margin: 0px;width: 155px;vertical-align: bottom;background: #92d050;}
					.td11{border-right: #000000 1px solid;border-bottom: #92d050 1px solid;padding: 0px;margin: 0px;width: 107px;vertical-align: bottom;background: #92d050;}
					.td12{border-right: #000000 1px solid;border-bottom: #92d050 1px solid;padding: 0px;margin: 0px;width: 237px;vertical-align: bottom;background: #92d050;}
					.td13{border-right: #000000 1px solid;border-bottom: #92d050 1px solid;padding: 0px;margin: 0px;width: 202px;vertical-align: bottom;background: #92d050;}
					.td14{border-left: #000000 1px solid;border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 29px;vertical-align: bottom;}
					.td15{border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 144px;vertical-align: bottom;}
					.td16{border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 149px;vertical-align: bottom;}
					.td17{border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 155px;vertical-align: bottom;}
					.td18{border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 107px;vertical-align: bottom;}
					.td19{border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 237px;vertical-align: bottom;}
					.td20{border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 202px;vertical-align: bottom;}
					.td21{border-left: #000000 1px solid;border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 29px;vertical-align: bottom;}
					.td22{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 144px;vertical-align: bottom;}
					.td23{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 149px;vertical-align: bottom;}
					.td24{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 155px;vertical-align: bottom;}
					.td25{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 107px;vertical-align: bottom;}
					.td26{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 237px;vertical-align: bottom;}
					.td27{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 202px;vertical-align: bottom;}
					.td28{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 134px;vertical-align: bottom;}
					.td29{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 153px;vertical-align: bottom;}
					.td30{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 159px;vertical-align: bottom;}
					.td31{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 110px;vertical-align: bottom;}
					.td32{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 242px;vertical-align: bottom;}
					.td33{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 250px;vertical-align: bottom;}
					.td34{border-left: #000000 1px solid;border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 29px;vertical-align: bottom;background: #92d050;}
					.td35{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 133px;vertical-align: bottom;background: #92d050;}
					.td36{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 152px;vertical-align: bottom;background: #92d050;}
					.td37{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 158px;vertical-align: bottom;background: #92d050;}
					.td38{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 109px;vertical-align: bottom;background: #92d050;}
					.td39{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 241px;vertical-align: bottom;background: #92d050;}
					.td40{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 249px;vertical-align: bottom;background: #92d050;}
					.td41{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 133px;vertical-align: bottom;}
					.td42{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 152px;vertical-align: bottom;}
					.td43{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 158px;vertical-align: bottom;}
					.td44{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 109px;vertical-align: bottom;}
					.td45{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 241px;vertical-align: bottom;}
					.td46{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 249px;vertical-align: bottom;}
					.td47{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 140px;vertical-align: bottom;}
					.td48{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 151px;vertical-align: bottom;}
					.td49{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 158px;vertical-align: bottom;}
					.td50{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 106px;vertical-align: bottom;}
					.td51{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 229px;vertical-align: bottom;}
					.td52{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 377px;vertical-align: bottom;}
					.td53{padding: 0px;margin: 0px;width: 2px;vertical-align: bottom;}
					.td54{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 139px;vertical-align: bottom;background: #92d050;}
					.td55{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 150px;vertical-align: bottom;background: #92d050;}
					.td56{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 157px;vertical-align: bottom;background: #92d050;}
					.td57{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 105px;vertical-align: bottom;background: #92d050;}
					.td58{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 228px;vertical-align: bottom;background: #92d050;}
					.td59{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 376px;vertical-align: bottom;background: #92d050;}
					.td60{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 139px;vertical-align: bottom;}
					.td61{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 150px;vertical-align: bottom;}
					.td62{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 157px;vertical-align: bottom;}
					.td63{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 105px;vertical-align: bottom;}
					.td64{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 228px;vertical-align: bottom;}
					.td65{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 376px;vertical-align: bottom;}
					.td66{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 136px;vertical-align: bottom;}
					.td67{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 152px;vertical-align: bottom;}
					.td68{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 157px;vertical-align: bottom;}
					.td69{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 109px;vertical-align: bottom;}
					.td70{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 240px;vertical-align: bottom;}
					.td71{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 360px;vertical-align: bottom;}
					.td72{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 135px;vertical-align: bottom;background: #92d050;}
					.td73{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 151px;vertical-align: bottom;background: #92d050;}
					.td74{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 156px;vertical-align: bottom;background: #92d050;}
					.td75{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 108px;vertical-align: bottom;background: #92d050;}
					.td76{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 239px;vertical-align: bottom;background: #92d050;}
					.td77{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 359px;vertical-align: bottom;background: #92d050;}
					.td78{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 135px;vertical-align: bottom;}
					.td79{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 151px;vertical-align: bottom;}
					.td80{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 156px;vertical-align: bottom;}
					.td81{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 108px;vertical-align: bottom;}
					.td82{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 239px;vertical-align: bottom;}
					.td83{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 359px;vertical-align: bottom;}
					.td84{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 32px;vertical-align: bottom;}
					.td85{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 128px;vertical-align: bottom;}
					.td86{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 107px;vertical-align: bottom;}
					.td87{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 236px;vertical-align: bottom;}
					.td88{border-left: #000000 1px solid;border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 30px;vertical-align: bottom;background: #92d050;}
					.td89{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 127px;vertical-align: bottom;background: #92d050;}
					.td90{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 149px;vertical-align: bottom;background: #92d050;}
					.td91{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 155px;vertical-align: bottom;background: #92d050;}
					.td92{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 106px;vertical-align: bottom;background: #92d050;}
					.td93{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 235px;vertical-align: bottom;background: #92d050;}
					.td94{border-left: #000000 1px solid;border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 30px;vertical-align: bottom;}
					.td95{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 127px;vertical-align: bottom;}
					.td96{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 106px;vertical-align: bottom;}
					.td97{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 235px;vertical-align: bottom;}
					.td98{border-left: #000000 1px solid;border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 30px;vertical-align: bottom;}
					.td99{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 127px;vertical-align: bottom;}
					.td100{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 149px;vertical-align: bottom;}
					.td101{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 155px;vertical-align: bottom;}
					.td102{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 106px;vertical-align: bottom;}
					.td103{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 228px;vertical-align: bottom;}
					.td104{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 235px;vertical-align: bottom;}

					.tr0{height: 16px;}
					.tr1{height: 18px;}
					.tr2{height: 19px;}
					.tr3{height: 17px;}
					.tr4{height: 20px;}
					.tr5{height: 21px;}
					.tr6{height: 2px;}

					.t0{margin-left:1rem;width: 1031px;font: 13px 'Arial';}
					.t1{margin-left:1rem;width: 1079px;margin-top: 1px;font: 13px 'Arial';}
					.t2{margin-left:1rem;width: 1194px;font: 13px 'Arial';}
					.t3{margin-left:1rem;width: 1185px;font: 13px 'Arial';}
					.t4{margin-left:1rem;width: 1038px;font: 13px 'Arial';}

					</STYLE>
					<DIV id="page_1">
					<DIV id="dimg1">
					<IMG src="<?php echo get_plantilla_url().'/images/landing/table.jpg'; ?>" id="img1">
					</DIV>


					<DIV class="dclr"></DIV>
					<P class="p0 ft0">Foro: Innovación en Educación Básica. Tecnología para el Aprendizaje Creativo</P>
					<P class="p1 ft1">Lista de Participantes. Taller Aprendizaje Creativo en el Aula</P>
					<TABLE class="t0 table-hover">
					<TR>
						<TD class="tr0 td0"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td1"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td2"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td3"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td4"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td5"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td6"><P class="p3 ft3"><NOBR>07-dic-15</NOBR></P></TD>
					</TR>
					<TR>
						<TD class="tr1 td7"><P class="p4 ft4">No.</P></TD>
						<TD class="tr1 td8"><P class="p5 ft4">Nombre (s)</P></TD>
						<TD class="tr1 td9"><P class="p6 ft4">Apellido Paterno</P></TD>
						<TD class="tr1 td10"><P class="p7 ft4">Apellido Materno</P></TD>
						<TD class="tr1 td11"><P class="p8 ft4">CCT.</P></TD>
						<TD class="tr1 td12"><P class="p9 ft4">Líder Creativo</P></TD>
						<TD class="tr1 td13"><P class="p10 ft4">Taller</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td14"><P class="p11 ft5">1</P></TD>
						<TD class="tr2 td15"><P class="p12 ft6">Abril</P></TD>
						<TD class="tr2 td16"><P class="p13 ft6">Chagoya</P></TD>
						<TD class="tr2 td17"><P class="p13 ft6">Berzunza</P></TD>
						<TD class="tr2 td18"><P class="p13 ft6">30FDB0001I</P></TD>
						<TD class="tr2 td19"><P class="p12 ft6">Abril Chagoya Berzunza</P></TD>
						<TD class="tr2 td20"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">2</P></TD>
						<TD class="tr2 td22"><P class="p12 ft6">Adriana</P></TD>
						<TD class="tr2 td23"><P class="p13 ft6">Riego</P></TD>
						<TD class="tr2 td24"><P class="p13 ft6">Salas</P></TD>
						<TD class="tr2 td25"><P class="p13 ft6">30DPR5497X</P></TD>
						<TD class="tr2 td26"><P class="p12 ft6">Silvana Dillegros Reyes</P></TD>
						<TD class="tr2 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">3</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Alberto</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Reyes</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Cristobal</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DPR1474L</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Jesús Sánchez Obando</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">4</P></TD>
						<TD class="tr2 td22"><P class="p12 ft6">Alfredo</P></TD>
						<TD class="tr2 td23"><P class="p13 ft6">Hernández</P></TD>
						<TD class="tr2 td24"><P class="p13 ft6">Pérez</P></TD>
						<TD class="tr2 td25"><P class="p13 ft6">30DTV0964S</P></TD>
						<TD class="tr2 td26"><P class="p12 ft6">Héctor Martínez Ramírez</P></TD>
						<TD class="tr2 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">5</P></TD>
						<TD class="tr2 td22"><P class="p12 ft6">Anthelma</P></TD>
						<TD class="tr2 td23"><P class="p13 ft6">Galindo</P></TD>
						<TD class="tr2 td24"><P class="p13 ft6">Martínez</P></TD>
						<TD class="tr2 td25"><P class="p13 ft6">30DTV0800I</P></TD>
						<TD class="tr2 td26"><P class="p12 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr2 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">6</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Ariana</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Arrieta</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Flores</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DPR1474L</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Jesús Sánchez Obando</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">7</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Armando</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Blanco</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Manzanilla</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30EPR1559R</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Daniel Demeneghi Gamboa</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">8</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Beatriz</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Gutiérrez</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Sampayo</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DTV0512Q</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Ángel Ramírez Pérez</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">9</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Blanca Elvia</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Silva</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Granados</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DJN3378F</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Abril Chagoya Berzunza</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">10</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Blanca Estela</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Hernández</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Carrasco</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30ETV0238Z</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Lizbeth Magally Espinosa Espinosa</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">11</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Camilo</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Seseña</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Juárez</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30EPR0150X</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">12</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Celia</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">De Jesus</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Hernandez</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DPR1474L</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Jesús Sánchez Obando</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">13</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Constantina</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Gómez</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Chimal</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DPR3481I</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Vanessa Alejandra López Murrieta</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">14</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Consuelo</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Evangelista</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Sánchez</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DPR0379A</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Luz Aremi Vazquez Rincón</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">15</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">David Baudel</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Parra</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">López</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DTV1099X</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">16</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Dulce</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Seseña</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Cruz</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30EPR0150X</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">17</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Edmundo</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Chimal</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Sánchez</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DPR3481I</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Vanessa Alejandra López Murrieta</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">18</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Eva Guadalupe</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Almora</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Silverio</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DPR1738D</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Silvana Dillegros Reyes</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">19</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Evangelina</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Toral</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Acosta</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30EPR1559R</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Daniel Demeneghi Gamboa</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">20</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Fernando</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Lozano</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Martínez</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DPR5359V</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">21</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Gregorio Alfredo</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Maldonado</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Pérez</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DJN2861U</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">José David Carreón Morales</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">22</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Ingrid Denise</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Cano</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Hernandez</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DJN0762G</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">23</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Jannet</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Pozos</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Contreras</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30FAD0002I</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Jannet Pozos Contreras</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">24</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Jesús</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Sánchez</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Obando</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30FMB0019P</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Jesús Sánchez Obando</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">25</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Jorge</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Araujo</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Cruz</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30FUA0046W</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Jannet Pozos Contreras</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">26</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Jorge Manuel</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Márquez</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Castro</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DPR5297Z</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Vanessa Alejandra López Murrieta</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">27</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Karen Lizbeth</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Cortés</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Castizo</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30EPR3062X</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Vanessa Alejandra López Murrieta</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">28</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Karina</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Ortiz</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Domínguez</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30EJN1007Z</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Nazario Santiago López</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">29</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Karina Montserrat</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Hernandez</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Sandoval</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30EPR3767L</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Silvana Dillegros Reyes</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">30</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Leticia</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Constantino</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Limón</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30EPR1885M</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Teodoro Ramírez Escobar</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">31</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Luis Alberto</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Ortiz</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Castañeda</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DTV0719H</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Abril Chagoya Berzunza</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">32</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Luz Teresa</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Contreras</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Ortiz</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30FDB5001Q</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Luz Teresa Contreras Ortiz</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">33</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">María de Jesús</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Fernández</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Castro</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30EPR3062X</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Vanessa Alejandra López Murrieta</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">34</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Maria del Carmen</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Jimenez</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Fernandez</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DJN0762G</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr3 td21"><P class="p11 ft7">35</P></TD>
						<TD class="tr3 td22"><P class="p12 ft6">Maria del Socorro</P></TD>
						<TD class="tr3 td23"><P class="p13 ft6">Lozano</P></TD>
						<TD class="tr3 td24"><P class="p13 ft6">Aburto</P></TD>
						<TD class="tr3 td25"><P class="p13 ft6">30DPR0736Z</P></TD>
						<TD class="tr3 td26"><P class="p12 ft6">Lizbeth Magally Espinosa Espinosa</P></TD>
						<TD class="tr3 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">36</P></TD>
						<TD class="tr1 td22"><P class="p12 ft8">Marilin</P></TD>
						<TD class="tr1 td23"><P class="p13 ft8">Hernández</P></TD>
						<TD class="tr1 td24"><P class="p13 ft8">Rosas</P></TD>
						<TD class="tr1 td25"><P class="p13 ft8">30DTV1051D</P></TD>
						<TD class="tr1 td26"><P class="p12 ft8">Héctor Martínez Ramírez</P></TD>
						<TD class="tr1 td27"><P class="p13 ft8">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">37</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Martina del Pilar Rocìo</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Colli</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Canul</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DPR0736Z</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Lizbeth Magally Espinosa Espinosa</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">38</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Miguel Ángel</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Sánchez</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Domínguez</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30FTV0072H</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Héctor Martínez Ramírez</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">39</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Nelly Elizabeth</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Fernández</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Avendaño</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30EPR2603V</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">40</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Noemí</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Castañeda</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Ortiz</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DTV0267W</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Héctor Martínez Ramírez</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">41</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Omar</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">De Jesús</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Ventura</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30EPR0150X</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">42</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Pamela</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Diliegros</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Rivas</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30EPR3928H</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Silvana Dillegros Reyes</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">43</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Patricia</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Mendoza</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Ventura</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DPR5359V</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">44</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Patricia</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">De Jesús</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Ventura</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30EPR0150X</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">45</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Patricia</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Jiménez</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Salas</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DTV0685H</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Ángel Ramírez Pérez</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">46</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Praxedis</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Castro</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Bautista</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DPR5497X</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Silvana Dillegros Reyes</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">47</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">René</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Martínez</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Lara</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30FIZ0025X</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Vanessa Alejandra López Murrieta</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">48</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Rodrigo Alberto</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Madrid</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Ventura</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DTV0800I</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">49</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Sofia Vanessa</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Orozco</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Morán</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DPR0379A</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">Luz Aremi Vazquez Rincón</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">50</P></TD>
						<TD class="tr1 td22"><P class="p12 ft6">Teresa</P></TD>
						<TD class="tr1 td23"><P class="p13 ft6">Méndez</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Ventura</P></TD>
						<TD class="tr1 td25"><P class="p13 ft6">30DTV0800I</P></TD>
						<TD class="tr1 td26"><P class="p12 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td27"><P class="p13 ft6">Aprendizaje creativo en el aula</P></TD>
					</TR>
					</TABLE>

					</DIV>
					<DIV id="page_2">
					<DIV id="dimg1">
					<IMG src="<?php echo get_plantilla_url().'/images/landing/table.jpg'; ?>" id="img1">
					</DIV>


					<DIV class="dclr"></DIV>
					<P class="p14 ft0">Foro: Innovación en Educación Básica. Tecnología para el Aprendizaje Creativo</P>
					<P class="p15 ft1">Lista de Participantes. Creación de libros utilizando iBooks</P>
					<TABLE class="t1 table-hover">
					<TR>
						<TD class="tr0 td0"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td28"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td29"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td30"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td31"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td32"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td33"><P class="p16 ft3"><NOBR>07-dic-15</NOBR></P></TD>
					</TR>
					<TR>
						<TD class="tr2 td34"><P class="p4 ft9">No.</P></TD>
						<TD class="tr2 td35"><P class="p17 ft9">Nombre (s)</P></TD>
						<TD class="tr2 td36"><P class="p18 ft9">Apellido Paterno</P></TD>
						<TD class="tr2 td37"><P class="p19 ft9">Apellido Materno</P></TD>
						<TD class="tr2 td38"><P class="p20 ft9">CCT</P></TD>
						<TD class="tr2 td39"><P class="p21 ft9">Líder Creativo</P></TD>
						<TD class="tr2 td40"><P class="p22 ft9">Taller</P></TD>
					</TR>
					<TR>
						<TD class="tr4 td21"><P class="p11 ft5">1</P></TD>
						<TD class="tr4 td41"><P class="p13 ft8">Aline Subayra</P></TD>
						<TD class="tr4 td42"><P class="p13 ft8">Arroyo</P></TD>
						<TD class="tr4 td43"><P class="p13 ft8">Ponce</P></TD>
						<TD class="tr4 td44"><P class="p13 ft8">30ADG1000Q</P></TD>
						<TD class="tr4 td45"><P class="p13 ft8">Aline Subayra Arroyo Ponce</P></TD>
						<TD class="tr4 td46"><P class="p13 ft8">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">2</P></TD>
						<TD class="tr2 td41"><P class="p13 ft8">Ana luz</P></TD>
						<TD class="tr2 td42"><P class="p13 ft8">Pérez</P></TD>
						<TD class="tr2 td43"><P class="p13 ft8">Cano</P></TD>
						<TD class="tr2 td44"><P class="p13 ft8">30DJN3378F</P></TD>
						<TD class="tr2 td45"><P class="p13 ft8">Abril Chagoya Berzunza</P></TD>
						<TD class="tr2 td46"><P class="p13 ft8">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">3</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">Ariel</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Ibancovichi</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Hernández</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30ADG0075Z</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">4</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">Carolina</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Cano</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Mota</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30FUA0068H</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">Jannet Pozos Contreras</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">5</P></TD>
						<TD class="tr2 td41"><P class="p13 ft8">Clara Erika</P></TD>
						<TD class="tr2 td42"><P class="p13 ft8">Acosta</P></TD>
						<TD class="tr2 td43"><P class="p13 ft8">Aguilar</P></TD>
						<TD class="tr2 td44"><P class="p13 ft8">30DML0045W</P></TD>
						<TD class="tr2 td45"><P class="p13 ft8">Jannet Pozos Contreras</P></TD>
						<TD class="tr2 td46"><P class="p13 ft8">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">6</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">Claudia Genoveva</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Peñaflor</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Hernández</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30EPR2621K</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">7</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">Daisy Lludmila</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Martínez</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Cámara</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30ETV0317M</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">Nazario Santiago López</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">8</P></TD>
						<TD class="tr2 td41"><P class="p13 ft8">Daniel</P></TD>
						<TD class="tr2 td42"><P class="p13 ft8">Demeneghi</P></TD>
						<TD class="tr2 td43"><P class="p13 ft8">Gamboa</P></TD>
						<TD class="tr2 td44"><P class="p13 ft8">30DES0071E</P></TD>
						<TD class="tr2 td45"><P class="p13 ft8">Daniel Demeneghi Gamboa</P></TD>
						<TD class="tr2 td46"><P class="p13 ft8">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">9</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">Diana</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Montes</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Reyes</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30ADG0075Z</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">10</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">Doralicia</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Reyes</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Alpírez</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30DJN1619Z</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">Abril Chagoya Berzunza</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">11</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">Eliezer</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Mora</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Trinidad</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30EPR3062X</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">Vanessa Alejandra López Murrieta</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">12</P></TD>
						<TD class="tr2 td41"><P class="p13 ft8">Esteban David</P></TD>
						<TD class="tr2 td42"><P class="p13 ft8">González</P></TD>
						<TD class="tr2 td43"><P class="p13 ft8">García</P></TD>
						<TD class="tr2 td44"><P class="p13 ft8">30DPR2926D</P></TD>
						<TD class="tr2 td45"><P class="p13 ft8">Esteban David González García</P></TD>
						<TD class="tr2 td46"><P class="p13 ft8">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">13</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">Eva Berenice</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Bello</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Benavides</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30FZP0086U</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">Abril Chagoya Berzunza</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">14</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">Guadalupe</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Ortiz</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Luna</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30DTV1287Q</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">Vanessa Alejandra López Murrieta</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">15</P></TD>
						<TD class="tr2 td41"><P class="p13 ft8">José</P></TD>
						<TD class="tr2 td42"><P class="p13 ft8">Pitalúa</P></TD>
						<TD class="tr2 td43"><P class="p13 ft8">Ramírez</P></TD>
						<TD class="tr2 td44"><P class="p13 ft8">30DTV0441M</P></TD>
						<TD class="tr2 td45"><P class="p13 ft8">Teodoro Ramírez Escobar</P></TD>
						<TD class="tr2 td46"><P class="p13 ft8">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">16</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">José Antonio</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Carvajal</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Cantillo</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30DES0018J</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">17</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">José Antonio</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Aguilar</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Moreno</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30DTV1356W</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">Silvana Dillegros Reyes</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">18</P></TD>
						<TD class="tr1 td41"><P class="p13 ft8">Laura</P></TD>
						<TD class="tr1 td42"><P class="p13 ft8">Segura</P></TD>
						<TD class="tr1 td43"><P class="p13 ft8">Herández</P></TD>
						<TD class="tr1 td44"><P class="p13 ft8">30DJN3378F</P></TD>
						<TD class="tr1 td45"><P class="p13 ft8">Abril Chagoya Berzunza</P></TD>
						<TD class="tr1 td46"><P class="p13 ft8">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">19</P></TD>
						<TD class="tr2 td41"><P class="p13 ft8">Lilibeth</P></TD>
						<TD class="tr2 td42"><P class="p13 ft8">Morales</P></TD>
						<TD class="tr2 td43"><P class="p13 ft8">Angulo</P></TD>
						<TD class="tr2 td44"><P class="p13 ft8">30EPR1165F</P></TD>
						<TD class="tr2 td45"><P class="p13 ft8">Jannet Pozos Contreras</P></TD>
						<TD class="tr2 td46"><P class="p13 ft8">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">20</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">Macario</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Ríos</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Escobar</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30DPR5535J</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">21</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">Marbet del Carmen</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Avalos</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Organista</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30FUA0039M</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">Luz Aremi Vazquez Rincón</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">22</P></TD>
						<TD class="tr2 td41"><P class="p13 ft8">Margarita</P></TD>
						<TD class="tr2 td42"><P class="p13 ft8">Sánchez</P></TD>
						<TD class="tr2 td43"><P class="p13 ft8">López</P></TD>
						<TD class="tr2 td44"><P class="p13 ft8">30EJN0110F</P></TD>
						<TD class="tr2 td45"><P class="p13 ft8">Abril Chagoya Berzunza</P></TD>
						<TD class="tr2 td46"><P class="p13 ft8">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">23</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">María Cristina</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Hernández</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Gutiérrez</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30DTV1559R</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">Aline Subayra Arroyo Ponce</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">24</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">petra hortencia</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">ayala</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">leiva</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30FIZ0180P</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">Lizbeth Magally Espinosa Espinosa</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">25</P></TD>
						<TD class="tr1 td41"><P class="p13 ft8">Rafael</P></TD>
						<TD class="tr1 td42"><P class="p13 ft8">López</P></TD>
						<TD class="tr1 td43"><P class="p13 ft8">Chigo</P></TD>
						<TD class="tr1 td44"><P class="p13 ft8">30DPB1006R</P></TD>
						<TD class="tr1 td45"><P class="p13 ft8">Teodoro Ramírez Escobar</P></TD>
						<TD class="tr1 td46"><P class="p13 ft8">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">26</P></TD>
						<TD class="tr2 td41"><P class="p13 ft8">Raquel</P></TD>
						<TD class="tr2 td42"><P class="p13 ft8">Zamudio</P></TD>
						<TD class="tr2 td43"><P class="p13 ft8">Cervantes</P></TD>
						<TD class="tr2 td44"><P class="p13 ft8">30DPR2617Y</P></TD>
						<TD class="tr2 td45"><P class="p13 ft8">Magnamara Mora Hernández</P></TD>
						<TD class="tr2 td46"><P class="p13 ft8">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">27</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">Sinuhe</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Reyes</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Vela</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30EPR2807P</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">Jesús Sánchez Obando</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">28</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">Tadeus Michael</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Blázquez</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">Pérez</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30DPR0780M</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">29</P></TD>
						<TD class="tr2 td41"><P class="p13 ft8">Valeria Patricia</P></TD>
						<TD class="tr2 td42"><P class="p13 ft8">Ramírez</P></TD>
						<TD class="tr2 td43"><P class="p13 ft8">Molina</P></TD>
						<TD class="tr2 td44"><P class="p13 ft8">30DTV0441M</P></TD>
						<TD class="tr2 td45"><P class="p13 ft8">Teodoro Ramírez Escobar</P></TD>
						<TD class="tr2 td46"><P class="p13 ft8">Creación de libros utilizando iBooks</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">30</P></TD>
						<TD class="tr1 td41"><P class="p13 ft6">Víctor Manuel</P></TD>
						<TD class="tr1 td42"><P class="p13 ft6">Castro</P></TD>
						<TD class="tr1 td43"><P class="p13 ft6">González</P></TD>
						<TD class="tr1 td44"><P class="p13 ft6">30EPR1559R</P></TD>
						<TD class="tr1 td45"><P class="p13 ft6">Daniel Demeneghi Gamboa</P></TD>
						<TD class="tr1 td46"><P class="p13 ft6">Creación de libros utilizando iBooks</P></TD>
					</TR>
					</TABLE>
					</DIV>
					<DIV id="page_3">
					<DIV id="dimg1">
					<IMG src="<?php echo get_plantilla_url().'/images/landing/table.jpg'; ?>" id="img1">
					</DIV>


					<DIV class="dclr"></DIV>
					<P class="p23 ft0">Foro: Innovación en Educación Básica. Tecnología para el Aprendizaje Creativo</P>
					<P class="p24 ft1">Lista de Participantes. Aplicaciones educativas para la asignatura de Matemáticas</P>
					<TABLE class="t2 table-hover">
					<TR>
						<TD class="tr0 td0"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td47"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td48"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td49"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td50"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td51"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td52"><P class="p25 ft3"><NOBR>07-dic-15</NOBR></P></TD>
						<TD class="tr3 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr4 td34"><P class="p4 ft9">No.</P></TD>
						<TD class="tr4 td54"><P class="p26 ft9">Nombre (s)</P></TD>
						<TD class="tr4 td55"><P class="p6 ft9">Apellido Paterno</P></TD>
						<TD class="tr4 td56"><P class="p7 ft9">Apellido Materno</P></TD>
						<TD class="tr4 td57"><P class="p27 ft9">CCT</P></TD>
						<TD class="tr4 td58"><P class="p28 ft9">Líder Creativo</P></TD>
						<TD class="tr4 td59"><P class="p29 ft9">Taller</P></TD>
						<TD class="tr5 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">1</P></TD>
						<TD class="tr2 td60"><P class="p13 ft6">Albertina</P></TD>
						<TD class="tr2 td61"><P class="p12 ft6">Jiménez</P></TD>
						<TD class="tr2 td62"><P class="p13 ft6">Ronzón</P></TD>
						<TD class="tr2 td63"><P class="p13 ft6">30DTV0719H</P></TD>
						<TD class="tr2 td64"><P class="p13 ft6">Abril Chagoya Berzunza</P></TD>
						<TD class="tr2 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr4 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">2</P></TD>
						<TD class="tr2 td60"><P class="p13 ft6">Ana Yazmin</P></TD>
						<TD class="tr2 td61"><P class="p12 ft6">García</P></TD>
						<TD class="tr2 td62"><P class="p13 ft6">Paredes</P></TD>
						<TD class="tr2 td63"><P class="p13 ft6">30DPR4872D</P></TD>
						<TD class="tr2 td64"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr2 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr4 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">3</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Carlos</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Martínez</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Cabra</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DTV0800I</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">4</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Claudia Cristina</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Córdoba</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Nogueira</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30EPR2603V</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">5</P></TD>
						<TD class="tr2 td60"><P class="p13 ft8">Daniel</P></TD>
						<TD class="tr2 td61"><P class="p12 ft8">Sosa</P></TD>
						<TD class="tr2 td62"><P class="p13 ft8">Morales</P></TD>
						<TD class="tr2 td63"><P class="p13 ft8">30DTV0250W</P></TD>
						<TD class="tr2 td64"><P class="p13 ft8">Aline Subayra Arroyo Ponce</P></TD>
						<TD class="tr2 td65"><P class="p13 ft8">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr4 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">6</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Edith Antelma</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Herrera</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Roa</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DTV0924R</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">7</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Enedino</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Torres</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Hernández</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DPR3613J</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Jesús Sánchez Obando</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">8</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Enrique de Jesús</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">García</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Chávez</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30EPR2617Y</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">9</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Gladys del Carmen</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Sánchez</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Santander</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30ETV0303J</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Luz Aremi Vazquez Rincón</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">10</P></TD>
						<TD class="tr2 td60"><P class="p13 ft8">Iliana</P></TD>
						<TD class="tr2 td61"><P class="p12 ft8">Del Ángel</P></TD>
						<TD class="tr2 td62"><P class="p13 ft8">Cortés</P></TD>
						<TD class="tr2 td63"><P class="p13 ft8">30EPR2511E</P></TD>
						<TD class="tr2 td64"><P class="p13 ft8">Silvana Dillegros Reyes</P></TD>
						<TD class="tr2 td65"><P class="p13 ft8">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr4 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">11</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">José de Jesús</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Gutiérrez</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Anastacio</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30EPR0835Y</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Mayra Nayeli Alarcón Alvardo</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">12</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">José Luis</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Martínez</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Bravo</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30EPR1559R</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Daniel Demeneghi Gamboa</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">13</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">José Luis</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Pachuca</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Bonifacio</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DTV0250W</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Aline Subayra Arroyo Ponce</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">14</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Juan Alberto</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Martinez</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Alvarez</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DTV0493S</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Héctor Martínez Ramírez</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">15</P></TD>
						<TD class="tr2 td60"><P class="p13 ft8">Karla Paola</P></TD>
						<TD class="tr2 td61"><P class="p12 ft8">Sauce</P></TD>
						<TD class="tr2 td62"><P class="p13 ft8">Pérez</P></TD>
						<TD class="tr2 td63"><P class="p13 ft8">30DPR4872D</P></TD>
						<TD class="tr2 td64"><P class="p13 ft8">Magnamara Mora Hernández</P></TD>
						<TD class="tr2 td65"><P class="p13 ft8">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr4 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">16</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Liliana</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Pulido</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Soto</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DPR4872D</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">17</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Lorena</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Cosio</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Rios</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DTV0083P</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Lizbeth Magally Espinosa Espinosa</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">18</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">María de Jesús</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Romero</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Córdoba</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30FUA0068H</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Jannet Pozos Contreras</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">19</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">María del Rosario</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Chaires</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Toga</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30EPR1885M</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Teodoro Ramírez Escobar</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">20</P></TD>
						<TD class="tr2 td60"><P class="p13 ft6">Maribel</P></TD>
						<TD class="tr2 td61"><P class="p12 ft6">Arenas</P></TD>
						<TD class="tr2 td62"><P class="p13 ft6">Juarez</P></TD>
						<TD class="tr2 td63"><P class="p13 ft6">30DTV0800I</P></TD>
						<TD class="tr2 td64"><P class="p13 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr2 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr4 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">21</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Martha Natalia</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Mejía</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Olguín</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30EPR3910I</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Daniel Demeneghi Gamboa</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">22</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Miguel</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Cortina</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">García</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30EPR2310H</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Jannet Pozos Contreras</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">23</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Nery</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Manzanilla</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Peralta</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30EPR1165F</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Jannet Pozos Contreras</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">24</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Norma</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Chavez</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Camacho</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DPR4872D</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">25</P></TD>
						<TD class="tr2 td60"><P class="p13 ft6">Obdulia</P></TD>
						<TD class="tr2 td61"><P class="p12 ft6">Sánchez</P></TD>
						<TD class="tr2 td62"><P class="p13 ft6">López</P></TD>
						<TD class="tr2 td63"><P class="p13 ft6">30EJN1007Z</P></TD>
						<TD class="tr2 td64"><P class="p13 ft6">Nazario Santiago López</P></TD>
						<TD class="tr2 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr4 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">26</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Osvelia Cirina</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Alfonso</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Aguilar</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DST0086Z</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Mayra Nayeli Alarcón Alvardo</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">27</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Quethzally Adelina</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Díaz</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Morales</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DPR2272W</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Jannet Pozos Contreras</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">28</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Rafael</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Arauz</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Muñoz</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30EPR3062X</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Vanessa Alejandra López Murrieta</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">29</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Rafael</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Lobato</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Nieto</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DTV0250W</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Aline Subayra Arroyo Ponce</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">30</P></TD>
						<TD class="tr2 td60"><P class="p13 ft6">Rene</P></TD>
						<TD class="tr2 td61"><P class="p12 ft6">Ramírez</P></TD>
						<TD class="tr2 td62"><P class="p13 ft6">Nava</P></TD>
						<TD class="tr2 td63"><P class="p13 ft6">30DPR0241P</P></TD>
						<TD class="tr2 td64"><P class="p13 ft6">Jesús Sánchez Obando</P></TD>
						<TD class="tr2 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr4 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">31</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Rosa iris</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Pensado</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Galvan</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30EPR1165F</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Jannet Pozos Contreras</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">32</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Rosa Isela</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Moreno</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Alvarez</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DPR0379A</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Luz Aremi Vazquez Rincón</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">33</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Sandra</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Domínguez</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Bustamante</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DTV1051D</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Héctor Martínez Ramírez</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">34</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Sandra</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Morales</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Flores</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30EJN0110F</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Abril Chagoya Berzunza</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">35</P></TD>
						<TD class="tr2 td60"><P class="p13 ft6">Teodoro</P></TD>
						<TD class="tr2 td61"><P class="p12 ft6">Ramírez</P></TD>
						<TD class="tr2 td62"><P class="p13 ft6">Escobar</P></TD>
						<TD class="tr2 td63"><P class="p13 ft6">30ADG0075Z</P></TD>
						<TD class="tr2 td64"><P class="p13 ft6">Teodoro Ramírez Escobar</P></TD>
						<TD class="tr2 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr4 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">36</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Victoria Concepción</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Levosi</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Jiménez</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DPR5535J</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">37</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Yeni Celia</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Herrera</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Seseña</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DTV1589L</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">38</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Yuridia Citlalic Reyna</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">García</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">García</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DPR4872D</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p11 ft5">39</P></TD>
						<TD class="tr2 td60"><P class="p13 ft6">Zaira Haydeé</P></TD>
						<TD class="tr2 td61"><P class="p12 ft6">Soriano</P></TD>
						<TD class="tr2 td62"><P class="p13 ft6">Gerón</P></TD>
						<TD class="tr2 td63"><P class="p13 ft6">30FUA0068H</P></TD>
						<TD class="tr2 td64"><P class="p13 ft6">Jannet Pozos Contreras</P></TD>
						<TD class="tr2 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr4 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p11 ft5">40</P></TD>
						<TD class="tr1 td60"><P class="p13 ft6">Zulema Odemari</P></TD>
						<TD class="tr1 td61"><P class="p12 ft6">Pérez</P></TD>
						<TD class="tr1 td62"><P class="p13 ft6">Robles</P></TD>
						<TD class="tr1 td63"><P class="p13 ft6">30DTV0441M</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Teodoro Ramírez Escobar</P></TD>
						<TD class="tr1 td65"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Matemáticas</P></TD>
						<TD class="tr2 td53"><P class="p2 ft2">&nbsp;</P></TD>
					</TR>
					</TABLE>
					</DIV>
					<DIV id="page_4">
					<DIV id="dimg1">
					<IMG src="<?php echo get_plantilla_url().'/images/landing/table.jpg'; ?>" id="img1">
					</DIV>


					<DIV class="dclr"></DIV>
					<P class="p30 ft0">Foro: Innovación en Educación Básica. Tecnología para el Aprendizaje Creativo</P>
					<P class="p31 ft1">Lista de Participantes. Aplicaciones educativas para la asignatura de Español</P>
					<TABLE class="t3 table-hover">
					<TR>
						<TD class="tr0 td0"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td66"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td67"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td68"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td69"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td70"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td71"><P class="p32 ft3"><NOBR>07-dic-15</NOBR></P></TD>
					</TR>
					<TR>
						<TD class="tr4 td34"><P class="p33 ft9">No.</P></TD>
						<TD class="tr4 td72"><P class="p17 ft9">Nombre (s)</P></TD>
						<TD class="tr4 td73"><P class="p6 ft9">Apellido Paterno</P></TD>
						<TD class="tr4 td74"><P class="p18 ft9">Apellido Materno</P></TD>
						<TD class="tr4 td75"><P class="p20 ft9">CCT</P></TD>
						<TD class="tr4 td76"><P class="p34 ft9">Líder Creativo</P></TD>
						<TD class="tr4 td77"><P class="p35 ft9">Taller</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p4 ft5">1</P></TD>
						<TD class="tr2 td78"><P class="p12 ft6">Héctor</P></TD>
						<TD class="tr2 td79"><P class="p13 ft6">Martínez</P></TD>
						<TD class="tr2 td80"><P class="p13 ft6">Ramirez</P></TD>
						<TD class="tr2 td81"><P class="p13 ft6">30FDA5001R</P></TD>
						<TD class="tr2 td82"><P class="p12 ft6">Héctor Martínez Ramírez</P></TD>
						<TD class="tr2 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p4 ft5">2</P></TD>
						<TD class="tr2 td78"><P class="p12 ft6">Magnamara</P></TD>
						<TD class="tr2 td79"><P class="p13 ft6">Mora</P></TD>
						<TD class="tr2 td80"><P class="p13 ft6">Hernández</P></TD>
						<TD class="tr2 td81"><P class="p13 ft6">30FUA0046W</P></TD>
						<TD class="tr2 td82"><P class="p12 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr2 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p4 ft5">3</P></TD>
						<TD class="tr2 td78"><P class="p12 ft6">Lízbeth Magally</P></TD>
						<TD class="tr2 td79"><P class="p13 ft6">Espinosa</P></TD>
						<TD class="tr2 td80"><P class="p13 ft6">Espinosa</P></TD>
						<TD class="tr2 td81"><P class="p13 ft6">30FJS0016V</P></TD>
						<TD class="tr2 td82"><P class="p12 ft6">Lizbeth Magally Espinosa Espinosa</P></TD>
						<TD class="tr2 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p4 ft5">4</P></TD>
						<TD class="tr2 td78"><P class="p12 ft6">Saraith</P></TD>
						<TD class="tr2 td79"><P class="p13 ft6">Ramírez</P></TD>
						<TD class="tr2 td80"><P class="p13 ft6">Gómez</P></TD>
						<TD class="tr2 td81"><P class="p13 ft6">30ETV0303J</P></TD>
						<TD class="tr2 td82"><P class="p12 ft6">Luz Aremi Vazquez Rincón</P></TD>
						<TD class="tr2 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr4 td21"><P class="p4 ft5">5</P></TD>
						<TD class="tr4 td78"><P class="p12 ft6">Erika</P></TD>
						<TD class="tr4 td79"><P class="p13 ft6">Mixtega</P></TD>
						<TD class="tr4 td80"><P class="p13 ft6">Polito</P></TD>
						<TD class="tr4 td81"><P class="p13 ft6">30DT1773I</P></TD>
						<TD class="tr4 td82"><P class="p12 ft6">Teodoro Ramírez Escobar</P></TD>
						<TD class="tr4 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p4 ft5">6</P></TD>
						<TD class="tr2 td78"><P class="p12 ft6">Ángela Margarita</P></TD>
						<TD class="tr2 td79"><P class="p13 ft6">Arreola</P></TD>
						<TD class="tr2 td80"><P class="p13 ft6">Caballero</P></TD>
						<TD class="tr2 td81"><P class="p13 ft6">30DPR0331H</P></TD>
						<TD class="tr2 td82"><P class="p12 ft6">Lizbeth Magally Espinosa Espinosa</P></TD>
						<TD class="tr2 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">7</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Araceli</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Guevara</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Campos</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30EPR3910I</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Daniel Demeneghi Gamboa</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">8</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Blanca Estela</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Bonilla</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Sánchez</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DTV0924R</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">9</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">José Luis Manuel</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Arroyo</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Landa</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DTV0924R</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p4 ft5">10</P></TD>
						<TD class="tr2 td78"><P class="p12 ft6">Sofía Guadalupe</P></TD>
						<TD class="tr2 td79"><P class="p13 ft6">Monroy</P></TD>
						<TD class="tr2 td80"><P class="p13 ft6">Tenorio</P></TD>
						<TD class="tr2 td81"><P class="p13 ft6">30EPR2088Y</P></TD>
						<TD class="tr2 td82"><P class="p12 ft6">Jesús Sánchez Obando</P></TD>
						<TD class="tr2 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">11</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Mayté Guadalupe</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Chípol</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Figarola</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30EPR1885M</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Teodoro Ramírez Escobar</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">12</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Jonathan</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Domínguez</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Jon</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30EPR2617Y</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">13</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Yuridia</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Paxtián</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Rodriguez</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30ETV0238Z</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Lizbeth Magally Espinosa Espinosa</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">14</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Ana Maria</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Lopez</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Martinez</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30EJN0110F</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Abril Chagoya Berzunza</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p4 ft5">15</P></TD>
						<TD class="tr2 td78"><P class="p12 ft6">Raul</P></TD>
						<TD class="tr2 td79"><P class="p13 ft6">Gonzalez</P></TD>
						<TD class="tr2 td80"><P class="p13 ft6">Benitez</P></TD>
						<TD class="tr2 td81"><P class="p13 ft6">30DTV0878W</P></TD>
						<TD class="tr2 td82"><P class="p12 ft6">Vanessa Alejandra López Murrieta</P></TD>
						<TD class="tr2 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">16</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Amaury</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Trueba</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Romero</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DTv0878W</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Ángel Ramírez Pérez</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">17</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Jorge Alberto</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Alfaro</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Nolasco</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DPB1232N</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Héctor Martínez Ramírez</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">18</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Miguel</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Ramírez</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Escobar</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30FUA0122L</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Miguel Ramírez Escobar</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">19</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Jacqueline</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">De la Ronda</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Prieto</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DPR0379A</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Luz Aremi Vazquez Rincón</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p4 ft5">20</P></TD>
						<TD class="tr2 td78"><P class="p12 ft8">Teresa</P></TD>
						<TD class="tr2 td79"><P class="p13 ft8">Santiago</P></TD>
						<TD class="tr2 td80"><P class="p13 ft8">Hernández</P></TD>
						<TD class="tr2 td81"><P class="p13 ft8">30DML0045W</P></TD>
						<TD class="tr2 td82"><P class="p12 ft8">Jannet Pozos Contreras</P></TD>
						<TD class="tr2 td83"><P class="p13 ft8">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">21</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">LUCIA</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">REYES</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">HERNANDEZ</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DPR2664J</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Silvana Dillegros Reyes</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">22</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Laura</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Morales</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Escobar</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DPR3613J</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Jesús Sánchez Obando</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">23</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">María Araceli</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Jiménez</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Martinez</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DTV1356W</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Silvana Dillegros Reyes</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">24</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Homero Juan</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Pólito</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">DOMÍNGUEZ</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DPR5535J</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p4 ft5">25</P></TD>
						<TD class="tr2 td78"><P class="p12 ft8">Selmy Beatriz</P></TD>
						<TD class="tr2 td79"><P class="p13 ft8">Durán</P></TD>
						<TD class="tr2 td80"><P class="p13 ft8">Bautista</P></TD>
						<TD class="tr2 td81"><P class="p13 ft8">30DPR5535J</P></TD>
						<TD class="tr2 td82"><P class="p12 ft8">Magnamara Mora Hernández</P></TD>
						<TD class="tr2 td83"><P class="p13 ft8">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">26</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Margarita Adelaida</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Castelán</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Gasperín</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30ETV0399M</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Daniel Demeneghi Gamboa</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">27</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Viridiana</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Quepons</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Hernández</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DPR5535J</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">28</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Emmanuel</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">León</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Maza</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DPR5535J</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">29</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Edith</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Cortés</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Hernández</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DJN0253D</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Abril Chagoya Berzunza</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p4 ft5">30</P></TD>
						<TD class="tr2 td78"><P class="p12 ft8">Guadalupe Ernestina</P></TD>
						<TD class="tr2 td79"><P class="p13 ft8">Martínez</P></TD>
						<TD class="tr2 td80"><P class="p13 ft8">Morales</P></TD>
						<TD class="tr2 td81"><P class="p13 ft8">30DJN0253D</P></TD>
						<TD class="tr2 td82"><P class="p12 ft8">Abril Chagoya Berzunza</P></TD>
						<TD class="tr2 td83"><P class="p13 ft8">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">31</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Amalia</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Morales</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Landero</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DTV0878W</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Ángel Ramírez Pérez</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">32</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Deyanira</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Zétera</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Díaz</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DTV1559R</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Aline Subayra Arroyo Ponce</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">33</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Sait</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">García</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Rojas</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DPB1232N</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Héctor Martínez Ramírez</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">34</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Yuriana</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Alfaro</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Loeza</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DTV0250W</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Aline Subayra Arroyo Ponce</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p4 ft5">35</P></TD>
						<TD class="tr2 td78"><P class="p12 ft6">Lucia del Carmen</P></TD>
						<TD class="tr2 td79"><P class="p13 ft6">Málaga</P></TD>
						<TD class="tr2 td80"><P class="p13 ft6">Bernal</P></TD>
						<TD class="tr2 td81"><P class="p13 ft6">30DTV0250W</P></TD>
						<TD class="tr2 td82"><P class="p12 ft6">Aline Subayra Arroyo Ponce</P></TD>
						<TD class="tr2 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">36</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Teresa Lilí</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Romero</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Benítez</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30EPR2265F</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Jannet Pozos Contreras</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">37</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Angélica Maria</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Guerola</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Marin</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DTV0250W</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Aline Subayra Arroyo Ponce</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">38</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Moisés</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Gumercindo</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Aguilar</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DTV0250W</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Aline Subayra Arroyo Ponce</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td21"><P class="p4 ft5">39</P></TD>
						<TD class="tr1 td78"><P class="p12 ft6">Aline</P></TD>
						<TD class="tr1 td79"><P class="p13 ft6">Pascual</P></TD>
						<TD class="tr1 td80"><P class="p13 ft6">Aguilar</P></TD>
						<TD class="tr1 td81"><P class="p13 ft6">30DPB1006R</P></TD>
						<TD class="tr1 td82"><P class="p12 ft6">Teodoro Ramírez Escobar</P></TD>
						<TD class="tr1 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td21"><P class="p4 ft5">40</P></TD>
						<TD class="tr2 td78"><P class="p12 ft6">Erika</P></TD>
						<TD class="tr2 td79"><P class="p13 ft6">Caraza</P></TD>
						<TD class="tr2 td80"><P class="p13 ft6">Báez</P></TD>
						<TD class="tr2 td81"><P class="p13 ft6">30DPR3451O</P></TD>
						<TD class="tr2 td82"><P class="p12 ft6">Jannet Pozos Contreras</P></TD>
						<TD class="tr2 td83"><P class="p13 ft6">Aplicaciones educativas para la asignatura de Español</P></TD>
					</TR>
					</TABLE>
					</DIV>
					<DIV id="page_5">
					<DIV id="dimg1">
					<IMG src="<?php echo get_plantilla_url().'/images/landing/table.jpg'; ?>" id="img1">
					</DIV>


					<DIV class="dclr"></DIV>
					<P class="p36 ft0">Foro: Innovación en Educación Básica. Tecnología para el Aprendizaje Creativo</P>
					<P class="p37 ft1">Lista de Participantes. Elaboración de cursos con iTunesU</P>
					<TABLE class="t4 table-hover">
					<TR>
						<TD class="tr0 td84"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td85"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td2"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td3"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td86"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td51"><P class="p2 ft2">&nbsp;</P></TD>
						<TD class="tr0 td87"><P class="p38 ft3"><NOBR>07-dic-15</NOBR></P></TD>
					</TR>
					<TR>
						<TD class="tr2 td88"><P class="p33 ft0">No.</P></TD>
						<TD class="tr2 td89"><P class="p39 ft4">Nombre (s)</P></TD>
						<TD class="tr2 td90"><P class="p40 ft4">Apellido Paterno</P></TD>
						<TD class="tr2 td91"><P class="p18 ft4">Apellido Materno</P></TD>
						<TD class="tr2 td92"><P class="p41 ft4">CCT</P></TD>
						<TD class="tr2 td58"><P class="p28 ft4">Líder Creativo</P></TD>
						<TD class="tr2 td93"><P class="p42 ft4">Taller</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td94"><P class="p11 ft5">1</P></TD>
						<TD class="tr2 td95"><P class="p13 ft6">Alba Hane</P></TD>
						<TD class="tr2 td23"><P class="p12 ft6">Vences</P></TD>
						<TD class="tr2 td24"><P class="p13 ft6">Rico</P></TD>
						<TD class="tr2 td96"><P class="p12 ft6">30DTV0327U</P></TD>
						<TD class="tr2 td64"><P class="p13 ft6">Ángel Ramírez Pérez</P></TD>
						<TD class="tr2 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td94"><P class="p11 ft5">2</P></TD>
						<TD class="tr2 td95"><P class="p13 ft6">Alberto</P></TD>
						<TD class="tr2 td23"><P class="p12 ft6">Garcia Jurado</P></TD>
						<TD class="tr2 td24"><P class="p13 ft6">Loyo</P></TD>
						<TD class="tr2 td96"><P class="p12 ft6">30DTV0441M</P></TD>
						<TD class="tr2 td64"><P class="p13 ft6">Teodoro Ramírez Escobar</P></TD>
						<TD class="tr2 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">3</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Angel</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Ramírez</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Pérez</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30FCY0001U</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Ángel Ramírez Pérez</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td94"><P class="p11 ft5">4</P></TD>
						<TD class="tr2 td95"><P class="p13 ft6">Angélica Eloisa</P></TD>
						<TD class="tr2 td23"><P class="p12 ft6">Grijalva</P></TD>
						<TD class="tr2 td24"><P class="p13 ft6">López</P></TD>
						<TD class="tr2 td96"><P class="p12 ft6">30EJN0110F</P></TD>
						<TD class="tr2 td64"><P class="p13 ft6">Abril Chagoya Berzunza</P></TD>
						<TD class="tr2 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td94"><P class="p11 ft5">5</P></TD>
						<TD class="tr2 td95"><P class="p13 ft6">Antonio</P></TD>
						<TD class="tr2 td23"><P class="p12 ft6">García</P></TD>
						<TD class="tr2 td24"><P class="p13 ft6">Martínez</P></TD>
						<TD class="tr2 td96"><P class="p12 ft6">30FUA0039M</P></TD>
						<TD class="tr2 td64"><P class="p13 ft6">Luz Aremi Vazquez Rincón</P></TD>
						<TD class="tr2 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">6</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Ariadna Geraldine</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Realpozo</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Aguilar</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DPR2259B</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">7</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Cornelio</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Espinosa</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Sánchez</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DTV0267W</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Héctor Martínez Ramírez</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">8</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Edgar Ignacio</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Koyoc</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Vera</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30FDA0001J</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Edgar Ignacio Koyoc Vera</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">9</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Emilia del Cármen</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Peña</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Rodríguez</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DTV0267W</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Héctor Martínez Ramírez</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">10</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Erasto</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Linares</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Hernández</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DST0126J</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Jannet Pozos Contreras</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">11</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Francisco Javier</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Eslava</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Conteras</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DTV0267W</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Héctor Martínez Ramírez</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">12</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Guadalupe</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Gómez</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Ponce</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30EPR2088Y</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Jesús Sánchez Obando</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">13</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Guadalupe Arminda</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">ROMERO</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Salas</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30FZP5105Z</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Luz Teresa Contreras Ortiz</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">14</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Iván René</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">González</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Alcántara</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DPR4404k</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Luz Aremi Vazquez Rincón</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">15</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Jair Josué</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Zárate</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Portugal</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DTV0267W</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Héctor Martínez Ramírez</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">16</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">José María</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Enríquez</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Segura</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30ETV0399M</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Daniel Demeneghi Gamboa</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">17</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Karen Etienne</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Solórzano</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Mariz</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30FCB5001Q</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Luz Teresa Contreras Ortiz</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">18</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Liliana</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Rodríguez</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Pucheta</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30EPR1885M</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Teodoro Ramírez Escobar</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">19</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Lissi Guadalupe</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Mendoza</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Alcocer</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DJN0060P</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Luz Teresa Contreras Ortiz</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">20</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">MAGDALENA</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">RAMIREZ</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">RAMIREZ</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DPR3481I</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Vanessa Alejandra López Murrieta</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">21</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">María Guadalupe</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Maza</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Montoya</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DPR1365E</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">22</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">María Guadalupe</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Barragán</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Méndez</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DPR1365E</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">23</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">María Magdalena</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Morales</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Grajales</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30EPR2573R</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">24</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Mayra</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Peña</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Rodríguez</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DTV0267W</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Héctor Martínez Ramírez</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">25</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Minervo</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Romero</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Rodríguez</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DTV0267W</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Héctor Martínez Ramírez</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">26</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Nazario</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Santiago López</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Santiago</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30FJS0020H</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Nazario Santiago López</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">27</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Nimbe</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Arellanos</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Beauregard</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30FDB5001Q</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Luz Teresa Contreras Ortiz</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">28</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">RAFAEL</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">HERNANDEZ</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">REYES</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DPR3481I</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Vanessa Alejandra López Murrieta</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">29</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Roberto Manuel</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Chacón</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Herrera</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DTV1559R</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Aline Subayra Arroyo Ponce</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">30</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Rolando</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Camamero</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Morales</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DPR5535J</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">31</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Sinuhé</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Canales</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Cortés</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30DPR2259B</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">32</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Víctor Antonio</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Mendo</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Soto</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30EPR2617Y</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">33</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Víctor Manuel</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Cortés</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Canseco</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30EPR2573R</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Magnamara Mora Hernández</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td94"><P class="p11 ft5">34</P></TD>
						<TD class="tr2 td95"><P class="p13 ft8">Yadira</P></TD>
						<TD class="tr2 td23"><P class="p12 ft8">Bartolo</P></TD>
						<TD class="tr2 td24"><P class="p13 ft8">Velázquez.</P></TD>
						<TD class="tr2 td96"><P class="p12 ft8">30DTV1356W</P></TD>
						<TD class="tr2 td64"><P class="p13 ft8">Silvana Dillegros Reyes</P></TD>
						<TD class="tr2 td97"><P class="p13 ft8">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">35</P></TD>
						<TD class="tr1 td95"><P class="p13 ft8">Jessica Cohinta</P></TD>
						<TD class="tr1 td23"><P class="p12 ft8">Cazarín</P></TD>
						<TD class="tr1 td24"><P class="p13 ft8">García</P></TD>
						<TD class="tr1 td96"><P class="p12 ft8">30EPR0044N</P></TD>
						<TD class="tr1 td64"><P class="p13 ft8">Vanessa Alejandra López Murrieta</P></TD>
						<TD class="tr1 td97"><P class="p13 ft8">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr3 td98"><P class="p11 ft7">36</P></TD>
						<TD class="tr3 td99"><P class="p13 ft6">Rosario Estela</P></TD>
						<TD class="tr3 td100"><P class="p12 ft6">Flores</P></TD>
						<TD class="tr3 td101"><P class="p13 ft6">Herrera</P></TD>
						<TD class="tr3 td102"><P class="p12 ft6">30EPR0044N</P></TD>
						<TD class="tr3 td103"><P class="p13 ft6">Vanessa Alejandra López Murrieta</P></TD>
						<TD class="tr3 td104"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr6 td94"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td95"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td23"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td24"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td96"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td64"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td97"><P class="p2 ft10">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr3 td98"><P class="p11 ft7">37</P></TD>
						<TD class="tr3 td99"><P class="p13 ft6">Martha Enimia</P></TD>
						<TD class="tr3 td100"><P class="p12 ft6">Aldana</P></TD>
						<TD class="tr3 td101"><P class="p13 ft6">López</P></TD>
						<TD class="tr3 td102"><P class="p12 ft6">30DTV0512Q</P></TD>
						<TD class="tr3 td103"><P class="p13 ft6">Ángel Ramírez Pérez</P></TD>
						<TD class="tr3 td104"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr6 td94"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td95"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td23"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td24"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td96"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td64"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td97"><P class="p2 ft10">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr3 td98"><P class="p11 ft7">38</P></TD>
						<TD class="tr3 td99"><P class="p13 ft6">Javier</P></TD>
						<TD class="tr3 td100"><P class="p12 ft6">Aburto</P></TD>
						<TD class="tr3 td101"><P class="p13 ft6">Reyes</P></TD>
						<TD class="tr3 td102"><P class="p12 ft6">30DTV1099X</P></TD>
						<TD class="tr3 td103"><P class="p13 ft6">José Antonio Carvajal Cantillo</P></TD>
						<TD class="tr3 td104"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr6 td94"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td95"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td23"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td24"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td96"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td64"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td97"><P class="p2 ft10">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr3 td98"><P class="p11 ft7">39</P></TD>
						<TD class="tr3 td99"><P class="p13 ft8">Karla Guadalupe</P></TD>
						<TD class="tr3 td100"><P class="p12 ft8">Silva</P></TD>
						<TD class="tr3 td101"><P class="p13 ft8">Domínguez</P></TD>
						<TD class="tr3 td102"><P class="p12 ft8">30DST0086Z</P></TD>
						<TD class="tr3 td103"><P class="p13 ft8">Mayra Nayeli Alarcón Alvardo</P></TD>
						<TD class="tr3 td104"><P class="p13 ft8">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr6 td94"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td95"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td23"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td24"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td96"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td64"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td97"><P class="p2 ft10">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr3 td98"><P class="p11 ft7">40</P></TD>
						<TD class="tr3 td99"><P class="p13 ft8">Annel</P></TD>
						<TD class="tr3 td100"><P class="p12 ft8">Corro</P></TD>
						<TD class="tr3 td101"><P class="p13 ft8">Hernández</P></TD>
						<TD class="tr3 td102"><P class="p12 ft8">30DST0086Z</P></TD>
						<TD class="tr3 td103"><P class="p13 ft8">Mayra Nayeli Alarcón Alvardo</P></TD>
						<TD class="tr3 td104"><P class="p13 ft8">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr6 td94"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td95"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td23"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td24"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td96"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td64"><P class="p2 ft10">&nbsp;</P></TD>
						<TD class="tr6 td97"><P class="p2 ft10">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td94"><P class="p11 ft5">41</P></TD>
						<TD class="tr2 td95"><P class="p13 ft6">Carlos Javier</P></TD>
						<TD class="tr2 td23"><P class="p12 ft6">Cruz</P></TD>
						<TD class="tr2 td24"><P class="p13 ft6">Ramos</P></TD>
						<TD class="tr2 td96"><P class="p12 ft6">30DNL0002X</P></TD>
						<TD class="tr2 td64"><P class="p13 ft6">Silvana Dillegros Reyes</P></TD>
						<TD class="tr2 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr2 td94"><P class="p11 ft5">42</P></TD>
						<TD class="tr2 td95"><P class="p13 ft8">Alma Dinorah</P></TD>
						<TD class="tr2 td23"><P class="p12 ft8">Aburto</P></TD>
						<TD class="tr2 td24"><P class="p13 ft8">Cortez</P></TD>
						<TD class="tr2 td96"><P class="p12 ft8">30DPR4021E</P></TD>
						<TD class="tr2 td64"><P class="p13 ft8">Luz Aremi Vazquez Rincón</P></TD>
						<TD class="tr2 td97"><P class="p13 ft8">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					<TR>
						<TD class="tr1 td94"><P class="p11 ft5">43</P></TD>
						<TD class="tr1 td95"><P class="p13 ft6">Alicia</P></TD>
						<TD class="tr1 td23"><P class="p12 ft6">Morales</P></TD>
						<TD class="tr1 td24"><P class="p13 ft6">Lachino</P></TD>
						<TD class="tr1 td96"><P class="p12 ft6">30FUA0046W</P></TD>
						<TD class="tr1 td64"><P class="p13 ft6">Jannet Pozos Contreras</P></TD>
						<TD class="tr1 td97"><P class="p13 ft6">Elaboración de cursos con iTunesU</P></TD>
					</TR>
					</TABLE>
					</DIV>
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
			      	    			'redirect'       => site_url(),
			      	                'form_id'        => 'loginform-home',
			      	                'label_username' => __( 'Correo electrónico' ),
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

