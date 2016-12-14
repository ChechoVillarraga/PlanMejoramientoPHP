<?php

include '../modelo/include_dao.php';
include '../servicios/fpdf/fpdf.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CtlPdf
 *
 * @author usuario
 */
$doc = new FPDF();
$doc->SetTopMargin(30);
$doc->AddPage();
$doc->SetFont('Arial', 'B', 12);
$doc->SetMargins(10, 30, 20);
$doc->Ln();
$doc->Cell(0, 12, '-----------------------------------------------------------' .
        '---------------------------------------------------------------------------');


$doc->Ln();
$doc->SetFont('Arial', 'B', 30);
$fecha = getdate();
$r = $fecha['year'] . $fecha['mon'] . $fecha['mday'];
$doc->Cell(10, 1, 'Circular de Preguntas: ' . $r);
$doc->Ln();
$doc->SetFont('Arial', 'B', 12);
$doc->Cell(40, 20, '----------------------------------------------------------' .
        '---------------------------------------------------------------------------');
$doc->Ln();
$pruebas = "Las inquietudes mas frecuentes son:";
$doc->Cell(10, 5, $pruebas);
$doc->Ln();


$doc->Cell(50, 5, "Categoria", 1, 'L');
$doc->Cell(50, 5, "Area", 1, 'L');
$doc->Cell(25, 5, 'Fecha ', 1, 'L');
$doc->Cell(60, 5, "Pregunta", 1, 'L');
$doc->Ln();


$obj = new PersonasPgDAO();
$s = $obj->queryInforme();

foreach ($s as $campo) {
    $doc->MultiCell(50, 5, $campo['categoria'], 0, 'L');
    $doc->Ln(-5);
    $doc->Cell(50);
    $doc->MultiCell(50, 5, $campo['area'], 0, 'L');
    $doc->Ln(-5);
    $doc->Cell(100);
    $doc->MultiCell(25, 5, $campo['fechacreacion'], 0, 'L');
    $doc->Ln(-5);
    $doc->Cell(125);
    $doc->MultiCell(60, 5, $campo['preguntas'], 0, 'L');
    $doc->Ln(7);
}
$doc->Ln();
$doc->Cell(10, 12, '-----------------------------------------------------------' .
        '---------------------------------------------------------------------------');


$doc->Ln();


$doc->Output();
