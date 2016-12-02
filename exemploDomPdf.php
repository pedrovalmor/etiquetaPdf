<?php

require './vendor/autoload.php';

//require_once './vendor/dompdf/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
//$dompdf->loadHtmlFile('index.html');

$nomes = [
    'lorem ipsum ...',
    'lorem ipsum ...'
];
foreach ($nomes as $i => $n) {
    if ($n) {
        $pp .= "<div>" . $n . " - " . $i . "</div>";
    }
}

$html = "<html><head><style> div { page-break-after: always; width: 85mm; height: 35mm; background: whitesmoke; } </style></head><body>" . $pp . "</body></html>";
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
