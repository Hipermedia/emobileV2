<?php
/**
 * The template for displaying email ajax form
 *
 * @package WordPress
 * @subpackage EMobile
 * @since EMobile 1.0
 */
?>
<script src="<?php plantilla_url() ?>/js/email-ajax-config.js"></script>

<div id="form-messages"></div>
<form id="ajax-contact" method="post" action="<?php plantilla_url(); ?>/send-email-ajax.php">
    <div class="field">
        <label for="formname">Name:</label>
        <input type="text" id="name" name="formname" required>
    </div>

    <div class="field">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div class="field">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
    </div>
    <?php $participante = get_user_by( 'id', get_query_var('id_perfil_autor') );?>
    <?php //print_array($participante); ?>
    <!--REEMPLAZA MI CORREO POR EL TUYO PARA QUE VEAS COMO FUNCIONA, AL TERMINAR EL PROYECTO SE DESCOMENTA LA LINEA DE PHP-->
	<input type="hidden" name="to" value="hibamiru@gmail.com<?php //echo $participante->user_email; ?>" />
    <div class="field">
        <button type="submit" id="submit">Enviar</button>
    </div>
    <div id="loadingtext">Estoy enviando tu mensaje...</div>
</form>

