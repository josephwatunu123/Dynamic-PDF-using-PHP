<?php

require __DIR__ . "/vendor/autoload.php";

$lengths = $_POST['length'];
$widths = $_POST['width'];
$quantities = $_POST['quantity'];



use Dompdf\Dompdf;
use Dompdf\Options;

// Process each set of inputs
for ($i = 0; $i < count($lengths); $i++) {
    $length = $lengths[$i];
    $width = $widths[$i];
    $quantity = $quantities[$i];

    echo "$length";
    echo "$width";
    echo "$quantity";


// $html= '<h1 style="color:green">Sample Quote</h1>';
// $html .="Length: $length ";
// $html .="width: $width ";
// $html .="quantity: $quantity";


// $options= new Options;
// $options->setChroot(__DIR__);

// $dompdf= new Dompdf($options);


// $dompdf->setPaper("A4","portrait");

// $html= file_get_contents("template.html");

// $html= str_replace("{{ length }}", $length, $html);
// $html= str_replace("{{ width }}", $width, $html);
// $html= str_replace("{{ quantity }}", $quantity, $html);


// $dompdf->loadHtml($html);


// $dompdf->render();

// $dompdf->stream("dimension.pdf",["Attachment" =>0]);

}
?>