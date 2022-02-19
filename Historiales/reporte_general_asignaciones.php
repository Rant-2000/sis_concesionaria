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
    $this->Cell(30,10,'Reporte General De Movimientos de Asignaciones',0,0,'C');

    // Salto de línea
    $this->Ln(20);
    
   $this->cell(10,10,'# H.',1,0,'c',0);
    $this->cell(25,10,'Usuario',1,0,'c',0);
    $this->cell(20,10,'Operacion',1,0,'c',0);
    $this->cell(35,10,'Fecha',1,0,'c',0);
    $this->cell(15,10,'#Reg.',1,0,'c',0);

    $this->cell(15,10,'#Insumo',1,0,'c',0);
    $this->cell(15,10,'#Rep',1,0,'c',0);
    $this->cell(15,10,'Cantidad',1,0,'c',0);
    $this->cell(35,10,'Fecha A.',1,1,'c',0);
    
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
$sql="call cons_hisasi";
$resultado=$mysqli->query($sql);

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
while($row=$resultado->fetch_assoc()){
    
    $pdf->cell(10,10,$row['idhis_insrepa'],1,0,'c',0);
    $pdf->cell(25,10,$row['usuario'],1,0,'c',0);
    if($row['operacion']=='D'){
        $pdf->cell(20,10,'Borrado',1,0,'c',0);
    }else{
        $pdf->cell(20,10,'Modificacion',1,0,'c',0);
    }
    
    $pdf->cell(35,10,$row['fecha'],1,0,'c',0);
    $pdf->cell(15,10,$row['id_registro'],1,0,'c',0);

    $pdf->cell(15,10,$row['idinsumo'],1,0,'c',0);
    $pdf->cell(15,10,$row['idrepa'],1,0,'c',0);
    $pdf->cell(15,10,$row['cantidad'],1,0,'c',0);
    $pdf->cell(35,10,$row['fecha_col'],1,1,'c',0);    
    
}
ob_end_clean();
$pdf->Output();
?>