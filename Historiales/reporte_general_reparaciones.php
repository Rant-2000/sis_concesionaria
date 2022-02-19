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
    $this->Cell(30,10,'Reporte Movimientos Reparaciones',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->cell(10,10,'# H.',1,0,'c',0);
    $this->cell(30,10,'Usuario',1,0,'c',0);
    $this->cell(20,10,'Operacion',1,0,'c',0);
    $this->cell(30,10,'Fecha',1,0,'c',0);
    $this->cell(12,10,'#Reg.',1,0,'c',0);

    $this->cell(10,10,'ID.M',1,0,'c',0);
    $this->cell(70,10,'Observaciones',1,0,'c',0);
    $this->cell(15,10,'Estado',1,0,'c',0);
    $this->cell(30,10,'Fecha de ingreso',1,0,'c',0);
    $this->cell(20,10,'Total',1,0,'c',0);
    $this->cell(20,10,'Auto',1,1,'c',0);
    //$this->cell(20,10,'# Motor',1,1,'c',0);
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
$sql="call cons_hisrepa";
$resultado=$mysqli->query($sql);

$pdf = new PDF('P', 'mm', array(279.4 , 431.8));
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
while($row=$resultado->fetch_assoc()){
	$pdf->cell(10,10,$row['idhis_reparacion'],1,0,'c',0);
    $pdf->cell(30,10,$row['usuario'],1,0,'c',0);
    $pdf->cell(20,10,$row['operacion'],1,0,'c',0);
    $pdf->cell(30,10,$row['fecha'],1,0,'c',0);
    $pdf->cell(12,10,$row['id_registro'],1,0,'c',0);

    $pdf->cell(10,10,$row['mecanico'],1,0,'c',0);	
    $pdf->cell(70,10,$row['obs'],1,0,'c',0);
    $pdf->cell(15,10,$row['estado'],1,0,'c',0);
    $pdf->cell(30,10,$row['fecha_ingreso'],1,0,'c',0);
    $pdf->cell(20,10,$row['total'],1,0,'c',0);
    $pdf->cell(20,10,$row['auto'],1,1,'c',0);
    //$pdf->cell(20,10,$row['Numero de Motor'],1,1,'c',0);
	//$pdf->cell(30,10,$row['Cargo'],1,1,'c',0);
}
ob_end_clean();
$pdf->Output();
?>