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
    $this->Cell(30,10,'Reporte Movimientos de Empleados',0,0,'C');
    // Salto de línea
    $this->Ln(20);
     $this->cell(10,10,'# H.',1,0,'c',0);
    $this->cell(30,10,'Usuario',1,0,'c',0);
    $this->cell(25,10,'Operacion',1,0,'c',0);
    $this->cell(35,10,'Fecha',1,0,'c',0);
    $this->cell(10,10,'#Reg.',1,0,'c',0);

	$this->cell(20,10,'Nombre',1,0,'c',0);
    $this->cell(30,10,'Apellidos',1,0,'c',0);
    $this->cell(22,10,'Telefono',1,0,'c',0);
    $this->cell(20,10,'Direccion',1,0,'c',0);
    $this->cell(20,10,'RFC',1,0,'c',0);
    $this->cell(20,10,'User',1,0,'c',0);
	$this->cell(12,10,'Cargo',1,0,'c',0);
    $this->cell(12,10,'Clave',1,1,'c',0);
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
$sql="call cons_hisempleado";
$resultado=$mysqli->query($sql);

$pdf = new PDF('P', 'mm', array(431.7 , 279.4));
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
while($row=$resultado->fetch_assoc()){
	$pdf->cell(10,10,$row['idhis_empleado'],1,0,'c',0);
    $pdf->cell(30,10,$row['usuario'],1,0,'c',0);
    if($row['operacion']=='D'){
        $pdf->cell(25,10,'Borrado',1,0,'c',0);
    }else{
        $pdf->cell(25,10,'Modificacion',1,0,'c',0);
    }
    
    $pdf->cell(35,10,$row['fecha'],1,0,'c',0);
    $pdf->cell(10,10,$row['id_registro'],1,0,'c',0);

	$pdf->cell(20,10,$row['nombre'],1,0,'c',0);
    $pdf->cell(30,10,$row['apellidos'],1,0,'c',0);
    $pdf->cell(22,10,$row['tel'],1,0,'c',0);
    $pdf->cell(20,10,$row['dir'],1,0,'c',0);
    $pdf->cell(20,10,$row['rfc'],1,0,'c',0);
    $pdf->cell(20,10,$row['usuario_col'],1,0,'c',0);
	$pdf->cell(12,10,$row['cargo'],1,0,'c',0);
    $pdf->cell(12,10,$row['clave'],1,1,'c',0);
}
ob_end_clean();
$pdf->Output();
?>