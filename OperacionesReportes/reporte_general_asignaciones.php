<?php
require('../fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
     $this->Image('../images/avatar.png',5,4,16);
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reporte General De Unidades',0,0,'C');

    // Salto de línea
    $this->Ln(20);
    
	$this->cell(10,10,'#As',1,0,'c',0);
    $this->cell(10,10,'#Rep',1,0,'c',0);
    $this->cell(35,10,'#Motor',1,0,'c',0);
    $this->cell(20,10,'Marca',1,0,'c',0);
    //$this->cell(20,10,'Modelo',1,0,'c',0);
    $this->cell(20,10,'Mecanico',1,0,'c',0);
	$this->cell(20,10,'Producto',1,0,'c',0);
    $this->cell(20,10,'Codigo',1,0,'c',0);
    $this->cell(18,10,'Cantidad',1,0,'c',0);
    $this->cell(35,10,'Fecha',1,1,'c',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    //$this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
include("../cn.php");
$sql="call constotal_insrepa";
$resultado=$mysqli->query($sql);

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
while($row=$resultado->fetch_assoc()){
	
	$pdf->cell(10,10,$row['idas'],1,0,'c',0);
    $pdf->cell(10,10,$row['ID Reparacion'],1,0,'c',0);
    $pdf->cell(35,10,$row['Numero de Motor'],1,0,'c',0);
    $pdf->cell(20,10,$row['Marca'],1,0,'c',0);
    //$pdf->cell(20,10,$row['Modelo'],1,0,'c',0);
    $pdf->cell(20,10,$row['Usuario'],1,0,'c',0);
	$pdf->cell(20,10,$row['Producto'],1,0,'c',0);
    $pdf->cell(20,10,$row['CodBarra'],1,0,'c',0);
    $pdf->cell(18,10,$row['Cantidad'],1,0,'c',0);
    
    $pdf->cell(35,10,$row['Fecha'],1,1,'c',0);
}
ob_end_clean();
$pdf->Output();
?>