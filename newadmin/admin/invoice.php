<?php
// Include TCPDF library
require_once('tcpdf/tcpdf.php');

// Define subscription details
$subscriptionName = "Premium Plan";
$subscriptionPrice = 49.99;
$startDate = date('Y-m-d');
$endDate = date('Y-m-d', strtotime('+1 month'));

// Calculate total amount
$total = $subscriptionPrice;

// Generate invoice number
$invoiceNumber = 'INV-' . date('Ymd') . '-' . rand(1000, 9999);

// Create invoice array
$invoice = array(
    'invoice_number' => $invoiceNumber,
    'subscription_name' => $subscriptionName,
    'start_date' => $startDate,
    'end_date' => $endDate,
    'total' => $total
);

// Generate PDF for invoice
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Company Name');
$pdf->SetTitle('Subscription Invoice');
$pdf->SetHeaderData('', '', 'Subscription Invoice', '');
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->SetFont('dejavusans', '', 12);
$pdf->AddPage();

$html = '<h2>Subscription Invoice</h2>';
$html .= '<p>Invoice Number: ' . $invoice['invoice_number'] . '</p>';
$html .= '<p>Subscription Name: ' . $invoice['subscription_name'] . '</p>';
$html .= '<p>Start Date: ' . $invoice['start_date'] . '</p>';
$html .= '<p>End Date: ' . $invoice['end_date'] . '</p>';
$html .= '<p>Total: $' . $invoice['total'] . '</p>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();
$pdf->Output('Downloads/Subscription_Invoice.pdf', 'F');

// Output success message
echo "Invoice generated successfully and saved in 'Downloads' folder!";
?>
