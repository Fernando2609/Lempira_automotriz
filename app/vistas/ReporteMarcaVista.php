
<?php
  require('/xampp/htdocs/lempira_automotriz/app/fpdf/fpdf.php');
  
  class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(40);
    // Título
    $this->SetFillColor(0, 0, 255);
    $this->SetTextColor(255,255,255);
    $this->Cell(120,10,'REPORTE DE MARCAS',1,0,'C',1);
    $this->Image('/xampp/htdocs/lempira_automotriz/public/img/Imagen2.png',10,10,33);
    // Salto de línea
    $this->Ln(40);
    $this->SetFont('Arial','B',14);
    $this->SetFillColor(0, 255, 255);
    $this->SetTextColor(0,0,0);
    $this->Cell(20,10,'',0,0,'C',0);
    $this->Cell(20,10,'',0,0,'C',0);
    $this->Cell(10,10,'No',1,0,'C',1);
    $this->Cell(30,10,utf8_decode('ID MARCA'),1,0,'C',1);
    $this->Cell(60,10,utf8_decode('MARCA'),1,1,'C',1);
    
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
  ob_start();
  $pdf = new PDF();
  $pdf -> AliasNbPages();
  $pdf->AddPage();
  $pdf->SetFont('Arial','B',12);
  for($i=0; $i<count($datos['data']); $i++){
    $pdf->Cell(20,10,'',0,0,'C',0);
    $pdf->Cell(20,10,'',0,0,'C',0);
    $pdf->Cell(10,10,$i+1,1,0,'C',0);
    $pdf->Cell(30,10,utf8_decode($datos["data"][$i]["ID_MARCA"]),1,0,'C',0);
    $pdf->Cell(60,10,utf8_decode($datos["data"][$i]["DESCRIPCION"]),1,1,'C',0);


   }

  $pdf->Output();
  ob_end_flush();

?>




