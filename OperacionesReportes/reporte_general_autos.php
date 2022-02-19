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
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reporte General De Unidades',0,0,'C');

    // Salto de línea
    $this->Ln(20);
    
	$this->cell(15,10,'#Motor',1,0,'c',0);
    $this->cell(20,10,'Placa',1,0,'c',0);
    $this->cell(15,10,'Marca',1,0,'c',0);
    $this->cell(25,10,'Modelo',1,0,'c',0);
    $this->cell(20,10,'Color',1,0,'c',0);
    $this->cell(20,10,'Costo',1,0,'c',0);
	$this->cell(20,10,'Insumos',1,0,'c',0);
    $this->cell(20,10,'Total',1,0,'c',0);
    $this->cell(17,10,'Estado',1,0,'c',0);
    $this->cell(20,10,'P.Venta',1,1,'c',0);
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
$sql="call cons_carro";
$resultado=$mysqli->query($sql);

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
while($row=$resultado->fetch_assoc()){
	
	$pdf->cell(15,10,$row['Numero de Motor'],1,0,'c',0);
    $pdf->cell(20,10,$row['Placa'],1,0,'c',0);
    $pdf->cell(15,10,$row['Marca'],1,0,'c',0);
    $pdf->cell(25,10,$row['Modelo'],1,0,'c',0);
    $pdf->cell(20,10,$row['Color'],1,0,'c',0);
    $pdf->cell(20,10,$row['P.Compra'],1,0,'c',0);
	$pdf->cell(20,10,$row['P.Reparacion'],1,0,'c',0);
    $pdf->cell(20,10,$row['P.Final'],1,0,'c',0);
    if($row['Estado']==1){
        $pdf->cell(17,10,'Vendido',1,0,'c',0);
    }else{
        $pdf->cell(17,10,'Libre',1,0,'c',0);
    }
    
    $pdf->cell(20,10,$row['P.Venta'],1,1,'c',0);
}
ob_end_clean();
$pdf->Output();
?>