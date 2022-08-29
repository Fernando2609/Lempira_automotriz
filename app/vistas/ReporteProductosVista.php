
<?php
  require('/xampp/htdocs/lempira_automotriz/app/fpdf/fpdf.php');
  
  class PDF extends FPDF
{
  
  function MyCell($w, $h,$x,$t ){
    $height=$h/3;
    $first = $height+1;
    $second = $height + $height +$height + 2;
    //$three = $height + $height +$height + $height + $height +3;

    $len = strlen($t);
    if ($len>15){
      $txt=str_split($t,30);
      $this->SetX($x);
      $this->Cell($w,$first,$txt[0],'','','');
      $this->SetX($x);
      $this->Cell($w,$second,$txt[1],'','','');
      //$this->SetX($x);
      //$this->Cell($w,$three,$txt[2],'','','');
      
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
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(40);
    // Título
    $this->SetFillColor(0, 0, 255);
    $this->SetTextColor(255,255,255);
    $this->Cell(120,10,'REPORTE DE PRODUCTOS',1,0,'C',1);
    $this->Image('/xampp/htdocs/lempira_automotriz/public/img/Imagen2.png',10,10,33);
    // Salto de línea
    
    $this->Ln(40);
    $this->SetFillColor(0, 255, 255);
    $this->SetTextColor(0,0,0);
    $this->SetFont('Arial','B',12);
    $this->Cell(10,10,utf8_decode('No'),1,0,'C',1);
    $this->Cell(30,10,utf8_decode('MARCA'),1,0,'C',1);
    $this->Cell(30,10,utf8_decode('MODELO'),1,0,'C',1);
    $this->Cell(40,10,utf8_decode('CHASIS'),1,0,'C',1);
    $this->Cell(30,10,utf8_decode('PRECIO'),1,0,'C',1);
    $this->Cell(25,10,utf8_decode('COLOR'),1,0,'C',1);
    $this->Cell(25,10,utf8_decode('STATUS'),1,1,'C',1);
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
  $pdf->SetFont('Arial','B',10);
  for($i=0; $i<count($datos['data']); $i++){
    $pdf->Cell(10,10,$i+1,1,0,'C',0);
    $pdf->Cell(30,10,utf8_decode($datos["data"][$i]["MARCA"]),1,0,'C',0);
    $pdf->Cell(30,10,utf8_decode($datos["data"][$i]["MODELO"]),1,0,'C',0);
    $pdf->Cell(40,10,utf8_decode($datos["data"][$i]["NUMERO_CHASIS"]),1,0,'C',0);
    $pdf->Cell(30,10,number_format($datos["data"][$i]["PRECIO"]),1,0,'C',0);
    $pdf->Cell(25,10,utf8_decode($datos["data"][$i]["COLOR"]),1,0,'C',0);
    if ($datos["data"][$i]["status"]==1) {
      // $pdf->Cell(30,10,$datos["data"][$i]["status"],1,1,'C',0);
       $pdf->Cell(25,10,'Activo',1,1,'C',0);;
     }elseif ($datos["data"][$i]["status"]==0) {
       $pdf->Cell(25,10,'Inactivo',1,1,'C',0);;
     }
    
   }

  $pdf->Output();
  ob_end_flush();

?>




