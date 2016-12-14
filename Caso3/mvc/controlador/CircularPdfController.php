<?php

require('../servicios/fpdf/fpdf.php');

class PDF extends FPDF {

    // Cabecera de página
    function Header() {
        $this->Image('header.png', 10, 10, 100, 28);
        $this->SetFont('Arial', 'B', 15);
        $this->SetXY(110, 20);
        $this->Cell(90, 10, utf8_decode('IMPRESIÓN DE REGISTRO'), 0, 0, 'C');
        $this->Ln(25);
    }

    // Pie de página
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }

}

$pdf = new PDF("P", "cm", "Letter");
$pdf->AddPage('P', 'Letter');
$pdf->SetFont('Times');
$pdf->SetTitle('Cuadro Comparativo');
$pdf->AliasNbPages();
$pdf->SetTopMargin(30);
$pdf->AddPage();
