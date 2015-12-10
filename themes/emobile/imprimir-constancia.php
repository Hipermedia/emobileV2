<?php
/**
 * Template Name: Imprimir Constancia
 * Description: Esta página genera un pdf con la Constancia del Foro de Innovación en Educación Básica: Tecnología para el Aprendizaje Creativo 
 *
 * @package WordPress
 * @subpackage EMobile
 * @since EMobile 1.0
 */
//user_redirect();
?>

<?php //$participante = participant_c_data(); ?>
<?php //echo '<pre style="display:block;">'; print_r($pdf); echo '</pre>'; // PRINT_R ?>
<?php require(TEMPLATEPATH . '/inc/fpdf/fpdf.php'); ?>
<?php define('FPDF_FONTPATH', TEMPLATEPATH . '/inc/fpdf/font'); //Absolute font path. Si lo defines en el config, podria ser asi: BASEPATH."application/libraries/font/"

//------------------------INICIO VARIABLES--------------------------//
$title = 'Constancia del Foro de Innovación en Educación Básica: Tecnología para el Aprendizaje Creativo ';
$nombre = "Nombre del participante";

//----------------CREO FUNCIONES PARA EL DOCUMENTO----------------//
class PDF extends FPDF {
	// Cabecera de página
	function Header()	{
	    // Logo
	    $this->Image(get_plantilla_url() . '/images/constancia00.jpg',0,0,280);
		
	    global $nombre;

	    // Arial bold 15
	    $this->SetFont('Arial','B',22);
	    // Calculamos ancho y posición del título.
	    $w = $this->GetStringWidth($nombre)+6;
	    $this->SetX((280-$w)/2);

	    $this->Cell($w,210,$nombre);
	    // Salto de línea
	    $this->Ln(10);
	}
	
}

//----------------CREO EL DOCUMENTO----------------//
$pdf = new PDF();

$pdf->SetTitle(utf8_decode($title));
$pdf->SetAuthor('eMobile');
$pdf->AddPage(L, Letter);


$pdf->Output();
?>



<?php //get_footer(); ?>