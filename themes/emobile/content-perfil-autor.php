<?php
/**
 * The template used for displaying author profile
 *
 * @package WordPress
 * @subpackage EMobile
 * @since EMobile 1.0
 */
//Rotatorio
?>
<?php if (get_query_var('id_perfil_autor')) { ?>
	<?php $validado = chek_participant_validation(get_query_var('id_perfil_autor')); ?>
    <?php if ($validado) { ?>
		<?php $perfil_autor = participant_c_data(); ?>
        <?php print_array($perfil_autor); ?>
    <?php } else { ?>
    	Este participante aún no ha completado su formulario de registro. Utiliza el dormulario de abajo para enviarle un recordatorio.
    <?php } ?>
    <?php $planeaciones = query_user_plans(); ?>
    <?php if ($planeaciones) { ?>
    	<?php usort($planeaciones, sortBySubKeyValue('asignatura')); ?>
        <?php print_array($planeaciones); ?>
    <?php } else { ?>
    	Este participante aún no ha realizado sus planeaciones.
    <?php } ?>
    <?php get_template_part( 'content', 'ajax-email' ); ?>
<?php } ?>