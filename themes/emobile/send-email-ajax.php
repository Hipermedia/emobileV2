<?php
/**
 * The template for responding ajax request
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to emobile_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage EMobile
 * @since EMobile 1.0
 */
?>
<?php
	require_once('./../../../wp-blog-header.php');
    // Added input sanitizing to prevent injection

    // Only process POST requests.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["formname"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
		$to = filter_var(trim($_POST["to"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "¡Ups! No se pudo mandar tu mensaje. Por favor llena bien todos los campos e inténtalo nuevamente.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $to = $to;

        // Set the email subject.
        $subject = "Nuevo mensaje de $name";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <servicio.de.correo@solucioneshipermedia.com>\n";
		$email_headers .= "Reply-to: $name <$email>";

        // Send the email.
        if (wp_mail($to, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "¡Gracias! Tu mensaje fue enviado exitosamente.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "¡Ups! Algo sucedió y no pudimos enviar tu mensaje. Notifica este incidente al administrador hola@hipermedia.in";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "¡Que vergüenza! Con que intentabas hacer trampa...";
    }

?>