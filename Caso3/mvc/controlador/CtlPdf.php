<?php

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
require_once '../vendor/autoload.php';
$doc= new FPDF();
$doc->AddPage();
$doc->SetFont('Arial','B',12);
$doc->SetMargins(10, 30, 20);
$doc->Ln();
$doc->Cell(0,12,'-----------------------------------------------------------'.
        '---------------------------------------------------------------------------');


$doc->Ln();
$doc->SetFont('Arial','B',30);
$fecha=  getdate();
$r=$fecha['year'].$fecha['mon'].$fecha['mday'];
$doc->Cell(10,1,'Circular de Preguntas: '.$r);
$doc->Ln();
$doc->SetFont('Arial','B',12);
$doc->Cell(40,20,'----------------------------------------------------------'.
        '---------------------------------------------------------------------------');
$doc->Ln();
$pruebas="Las inquietudes mas frecuentes son:";
$doc->Cell(10,5,$pruebas);
$doc->Ln();


$doc->Cell(50,5, "Categoria", 1,'L');
$doc->Cell(50 ,5, "Area", 1,'L');
$doc->Cell(30 ,5, 'Fecha ', 1,'L');
$doc->Cell(50 ,5, "Pregunta", 1,'L');
$doc->Ln();


//foreach($s as $campo){
$pregunta='aaaaaaacccccccccccccccccccccccccccccccccccccaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
$doc->MultiCell(50,3, $pregunta, 1,'L');
$doc->Ln(-12);
$doc->Cell(50);
$doc->MultiCell(50 ,3, $pregunta, 1,'L');
$doc->Ln(-12);
$doc->Cell(100);
$doc->MultiCell(30 ,3, '2016-12-01', 1,'L');
$doc->Ln(-3);
$doc->Cell(130);
$doc->MultiCell(50 ,3, $pregunta, 1,'L');
    
//}
$doc->Ln();
$doc->Cell(10,12,'-----------------------------------------------------------'.
        '---------------------------------------------------------------------------');


$doc->Ln();


$doc->Output();