<?php
require('fpdf.php');

require '../http/db/conexion.php';


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    // $this->Image('logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',16);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->SetTextColor(60, 60, 180);
    $this->Cell(90,10,'Reporte de Proveedores - Tecno Valan',0,'C');
    // Salto de línea
    $this->Ln(20);
    //Títulos celdas
    $this->Cell(50, 10, utf8_decode('Nombre'), 1, 0, 'C', 0);
    $this->Cell(70, 10, utf8_decode('Correo'), 1, 0, 'C', 0);
    $this->Cell(70, 10, utf8_decode('Número de contacto'), 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
}

$consulta = "SELECT * FROM providers_management";

$query = mysqli_query($conexion, $consulta);



$pdf = new PDF();
$pdf ->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

while($row = $query->fetch_assoc()){
    $pdf->Cell(50, 10, utf8_decode($row['name_provider']), 1, 0, 'C', 0);
    $pdf->Cell(70, 10, utf8_decode($row['email_provider']), 1, 0, 'C', 0);
    $pdf->Cell(70, 10, utf8_decode($row['number_contact_provider']), 1, 1, 'C', 0);
}

$pdf->Output();

?>