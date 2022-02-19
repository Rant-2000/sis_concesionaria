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
    $this->Cell(30,10,'Reporte general de Reparaciones',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    
	$this->cell(10,10,'ID',1,0,'c',0);
    $this->cell(90,10,'Observaciones',1,0,'c',0);
    $this->cell(35,10,'Fecha de ingreso',1,0,'c',0);
    $this->cell(20,10,'Total',1,0,'c',0);
    $this->cell(20,10,'Mecanico',1,0,'c',0);
    $this->cell(20,10,'# Motor',1,1,'c',0);
	//$this->cell(30,10,'Cargo',1,1,'c',0);
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
$sql="call cons_repa";
$resultado=$mysqli->query($sql);

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
while($row=$resultado->fetch_assoc()){
	
	$pdf->cell(10,10,$row['ID'],1,0,'c',0);
    $pdf->cell(90,10,$row['Observaciones'],1,0,'c',0);
    $pdf->cell(35,10,$row['Fecha de Ingreso'],1,0,'c',0);
    $pdf->cell(20,10,$row['Total'],1,0,'c',0);
    $pdf->cell(20,10,$row['Usuario Mecanico'],1,0,'c',0);
    $pdf->cell(20,10,$row['Numero de Motor'],1,1,'c',0);
	//$pdf->cell(30,10,$row['Cargo'],1,1,'c',0);
}
ob_end_clean();
$pdf->Output();
?>