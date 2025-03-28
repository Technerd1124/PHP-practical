<?php
require('fpdf.php'); // Path to the fpdf.php file
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16); // Arial, bold, size 16
$pdf->Cell(40, 10, 'Hello, World!');
$pdf->SetFont('Arial', '', 12); // Arial, regular, size 12
$pdf->Output();
?>
