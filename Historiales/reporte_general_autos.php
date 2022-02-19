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
    $this->SetFont('Arial','B',9);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reporte General De Movimientos de Unidades',0,0,'C');

    // Salto de línea
    $this->Ln(20);
    
   $this->cell(8,10,'# H.',1,0,'c',0);
    $this->cell(22,10,'Usuario',1,0,'c',0);
    $this->cell(20,10,'Operacion',1,0,'c',0);
    $this->cell(28,10,'Fecha',1,0,'c',0);
    $this->cell(10,10,'#Reg.',1,0,'c',0);

	$this->cell(15,10,'#Motor',1,0,'c',0);
    $this->cell(15,10,'Placa',1,0,'c',0);
    $this->cell(15,10,'Marca',1,0,'c',0);
    $this->cell(25,10,'Modelo',1,0,'c',0);
    
    $this->cell(20,10,'Costo',1,0,'c',0);
	$this->cell(20,10,'Insumos',1,0,'c',0);
    $this->cell(20,10,'Total',1,0,'c',0);
    $this->cell(12,10,'Estado',1,0,'c',0);
    $this->cell(28,10,'F.Compra',1,0,'c',0);
    $this->cell(20,10,'P.Venta',1,1,'c',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',6);
    // Número de página
    //$this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
include("../cn.php");
$sql="call cons_hisauto";
$resultado=$mysqli->query($sql);

$pdf = new PDF('P', 'mm', array(297,420));
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
while($row=$resultado->fetch_assoc()){
	
    $pdf->cell(8,10,$row['idhis_auto'],1,0,'c',0);
    $pdf->cell(22,10,$row['usuario'],1,0,'c',0);
    if($row['operacion']=='D'){
        $pdf->cell(20,10,'Borrado',1,0,'c',0);
    }else{
        $pdf->cell(20,10,'Modificacion',1,0,'c',0);
    }
    
    $pdf->cell(28,10,$row['fecha'],1,0,'c',0);
    $pdf->cell(10,10,$row['id_registro'],1,0,'c',0);

	$pdf->cell(15,10,$row['nmotor'],1,0,'c',0);
    $pdf->cell(15,10,$row['placa'],1,0,'c',0);
    $pdf->cell(15,10,$row['marca'],1,0,'c',0);
    $pdf->cell(25,10,$row['modelo'],1,0,'c',0);    
    $pdf->cell(20,10,$row['p_original'],1,0,'c',0);
	$pdf->cell(20,10,$row['p_reparacion'],1,0,'c',0);
    $pdf->cell(20,10,$row['p_final'],1,0,'c',0);
    if($row['estado']==1){
        $pdf->cell(12,10,'Vendido',1,0,'c',0);
    }else{
        $pdf->cell(12,10,'Libre',1,0,'c',0);
    }
    $pdf->cell(28,10,$row['fcompra'],1,0,'c',0);
    $pdf->cell(20,10,$row['p_venta'],1,1,'c',0);
}
ob_end_clean();
$pdf->Output();
?>