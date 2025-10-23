<?php

/**
*
*  Build a PDF with mPDF 
*
*  @author David G. Bonacho
*
*/

// mPDF (composer require mpdf/mpdf)
require_once 'vendor/autoload.php';


//  mPDF object (mode, format font size, margins) 
$mpdf = new \Mpdf\Mpdf([
			'mode' => '',
			'format' => 'A4',
			'default_font_size' => 0,
			'default_font' => 'Arial', // set the default font
			'margin_left' => 10,
			'margin_right' => 10,
			'margin_top' => 30,
			'margin_bottom' => 16,
			'margin_header' => 9,
			'margin_footer' => 9,
			'orientation' => 'P', // 'P' portrait, 'L' landscape
		]);



// set header (for all the pages)
$mpdf->SetHTMLHeader('<h1>Title</h1>'); //

// set footer with page number (for all the pages)
$mpdf->SetHTMLFooter('<hr><footer>Footer {PAGENO}</footer>');


	// create from template with buffer (ob_start / ob_get_clean) or file_get_contents()
    ob_start();
    include("template.php");
    $html = ob_get_clean();


	// fill out labels
	$html = str_replace('{{title}}', 'The title', $html);
	$html = str_replace('{{text}}', 'The text', $html);


// write html
$mpdf->WriteHTML($html);

//$mpdf->Output("documents/$somevar.pdf",'F'); // create PDF in HD

$mpdf->Output(); // view PDF on screen