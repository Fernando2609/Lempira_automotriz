
<?php
  require('/xampp/htdocs/lempira_automotriz/app/fpdf/fpdf.php');
  
  class PDF extends FPDF
{

  function MyCell($w, $h,$x,$t ){
    $height=$h/3;
    $first = $height+1;
    $second = $height + $height +$height + 2;

    $len = strlen($t);//CUENTA LOS CARACTERES
    if ($len>10){
      $txt=str_split($t,20);//SIRVE PARA DIVIDIR EL STRING
      $this->SetX($x);
      $this->Cell($w,$first,$txt[0],'','','');
      $this->SetX($x);
      $this->Cell($w,$second,$txt[1],'','','');
      $this->SetX($x);
      $this->Cell($w,$h,'','LTRB',0,'L',0);
    }else{
      $this->SetX($x);
      $this->Cell($w,$h,$t,'LTRB',0,'L',0);
    }
  }
  
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(40);
    $this->SetFillColor(0, 0, 255);
    $this->SetTextColor(255,255,255);
    $this->Cell(120,10,'REPORTE DE COLORES',1,0,'C',1);
    $this->Image('/xampp/htdocs/lempira_automotriz/public/img/Imagen2.png',10,10,33);
    // Salto de línea
    $this->Ln(40);
    $this->SetFillColor(0, 255, 255);
    $this->SetTextColor(0,0,0);
    $this->SetFont('Arial','B',14);
    $this->Cell(40,10,'',0,0,'C',0);
    $this->Cell(30,10,'',0,0,'C',0);
   $this->Cell(10,10,'No',1,0,'C',1);
    $this->Cell(50,10,utf8_decode('COLOR'),1,1,'C',1); 
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
  $pdf->SetFont('Arial','B',8);
  $w=30;
  $h=10;

  for($i=0; $i<count($datos['data']); $i++){
    
    $pdf->Cell(40,10,'',0,0,'C',0);
    $pdf->Cell(30,10,'',0,0,'C',0);
    
  
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(10,10,$i+1,1,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,utf8_decode($datos["data"][$i]["DESCRIPCION"]) ,1,1,'C',0);
    //$pdf->GetX();
    //$pdf->MyCell($w,$h,$x,utf8_decode($datos["data"][$i]["DESCRIPCION"]),1,1,'C',0);
  


    
    /*$pdf->Cell(40,10,'',0,0,'C',0);
    $pdf->Cell(30,10,'',0,0,'C',0);
    $pdf->MultiCell(10,10,$i+1,1,0,'C',0);
    if( $ln==0 )
    {
        $pdf->SetXY($x,$y);
    }
    $pdf->MultiCell(30,10,utf8_decode($datos["data"][$i]["DESCRIPCION"]) ,1,1,'C',0);
    if( $ln==0 )
    {
        $pdf->SetXY($x,$y);
    }*/
   }

  $pdf->Output();
  ob_end_flush();

?>




