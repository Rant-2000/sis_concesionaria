<?php
require('../fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reporte general de Empleados',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    
	$this->cell(25,10,'Nombre',1,0,'c',0);
    $this->cell(30,10,'Apellidos',1,0,'c',0);
    $this->cell(30,10,'Telefono',1,0,'c',0);
    $this->cell(35,10,'Direccion',1,0,'c',0);
    $this->cell(20,10,'RFC',1,0,'c',0);
    $this->cell(20,10,'Usuario',1,0,'c',0);
	$this->cell(30,10,'Cargo',1,1,'c',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}
include("../cn.php");
$sql="call cons_empleado";
$resultado=$mysqli->query($sql);

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
while($row=$resultado->fetch_assoc()){
	
	$pdf->cell(25,10,$row['Nombre'],1,0,'c',0);
    $pdf->cell(30,10,$row['Apellidos'],1,0,'c',0);
    $pdf->cell(30,10,$row['Telefono'],1,0,'c',0);
    $pdf->cell(35,10,$row['Direccion'],1,0,'c',0);
    $pdf->cell(20,10,$row['RFC'],1,0,'c',0);
    $pdf->cell(20,10,$row['Usuario'],1,0,'c',0);
	$pdf->cell(30,10,$row['Cargo'],1,1,'c',0);
}
ob_end_clean();
$pdf->Output();
?>