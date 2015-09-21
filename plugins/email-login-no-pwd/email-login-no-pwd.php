<?php

/*
  Plugin Name: Email login without password
  Plugin URI: http://solucioneshipermedia.com
  Description: Formulario de registro de participantes
  Version: 1.0
  Author: Hibam Iru Dionisio Alor
  Author URI: http://solucioneshipermedia.com
 */

function email_login_no_pwd_function() {
	global $display_form;
    $display_form 		= 	TRUE;
    if (isset($_POST['submit'])) {
        email_login_no_pwd_validation(
			$_POST['email']
			);
		
		// sanitize user form input
        global	$email;
        $email	= sanitize_email($_POST['email']);

		// call @function set_auth_cookie_no_pwd to create the login user cookie
		// only when no WP_error is found
        set_auth_cookie_no_pwd(
			$email
			);
    }
	
	email_login_no_pwd_form(
		$email,
		$display_form
		);
}

function email_login_no_pwd_form( $email ) {
	global $display_form;
	if ($display_form) {
		?>
		<style>
			div {
				margin-bottom:2px;
			}
			
			input{
				margin-bottom:4px;
			}
		</style>


		<p>Escribe tu dirección de correo electrónico para iniciar sesión y descargar planeaciones.</p>
		<form action="<?php $_SERVER['REQUEST_URI']; ?>" method="post">
            <div>
            <label for="email">Email <strong>*</strong></label>
            <input type="text" name="email" value="<?php (isset($_POST['email']) ? $email : null); ?>">
            </div>
        	<input type="hidden" name"request" value="lognpdw" />
            <input type="submit" name="submit" value="Ingresar"/>
		</form>
		<?php
    }
}

function email_login_no_pwd_validation( $email )  {
    global $reg_errors;
    $reg_errors = new WP_Error;

    if ( empty( $email ) ) {
        $reg_errors->add('field', 'No llenaste el campo email');
    }

    if ( !is_email( $email ) ) {
        $reg_errors->add('email_invalid', 'El email no es válido');
    }

    if ( is_wp_error( $reg_errors ) ) {

        foreach ( $reg_errors->get_error_messages() as $error ) {
            echo '<div>';
            echo '<strong>ERROR</strong>:';
            echo $error . '<br/>';

            echo '</div>';
        }
    }
}

//LOGIN WITH EMAIL (NO PWD)
function set_auth_cookie_no_pwd() {
    global $reg_errors, $email, $display_form;
    if ( count($reg_errors->get_error_messages()) < 1 ) {
		$user_id = get_participant_id_by_email($email);
		wp_set_auth_cookie( $user_id, true, $secure );
        $display_form 		= 	FALSE;
	}
}

// Register a new shortcode: [cr_custom_registration]
add_shortcode('email_login_no_pwd', 'email_login_no_pwd_shortcode');

// The callback function that will register new user
function email_login_no_pwd_shortcode() {
    ob_start();
    email_login_no_pwd_function();
    return ob_get_clean();
}
