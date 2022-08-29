
<?php
  require('/xampp/htdocs/lempira_automotriz/app/fpdf/fpdf.php');
  
  class PDF extends FPDF
{
  function MyCell($w, $h,$x,$t ){
    $height=$h/2;
    $first = $height+1;
    $second = $height + $height  + 5;
    $three = $height + $height +$height + $height + $height +3;

    $len = strlen($t);//CUENTA LOS CARACTERES
    if ($len>20){
      $txt=str_split($t,20);//SIRVE PARA DIVIDIR EL STRING
      $this->SetX($x);
      $this->Cell($w,$first,$txt[0].'-','','','');
      $this->SetX($x);
      $this->Cell($w,$second,$txt[1],'','','');
      $this->SetX($x);
      $this->Cell($w,$h,'','LTRB',0,'L',0);
    }elseif($len>30){
      $txt=str_split($t,20);//SIRVE PARA DIVIDIR EL STRING
      $this->SetX($x);
      $this->Cell($w,$first,$txt[0],'','','');
      $this->SetX($x);
      $this->Cell($w,$second,$txt[1],'','','');
      $this->SetX($x);
      $this->Cell($w,$three,$txt[2],'','','');
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
    $this->Cell(120,10,'REPORTE DE PROVEEDORES',1,0,'C',1);
    $this->Image('/xampp/htdocs/lempira_automotriz/public/img/Imagen2.png',10,10,33,0,'','http://localhost:8080/lempira_automotriz/');
        // Salto de línea
    $this->Ln(40);
    $this->SetFont('Arial','B',12);
    $this->SetFillColor(0, 255, 255);
    $this->SetTextColor(0,0,0);

    $this->Cell(10,10,utf8_decode('No'),1,0,'C',1);
    $this->Cell(10,10,utf8_decode('ID'),1,0,'C',1);
    $this->Cell(45,10,utf8_decode('NOMBRE'),1,0,'C',1);
    $this->Cell(55,10,utf8_decode('CORREO'),1,0,'C',1);
    $this->Cell(50,10,utf8_decode('DIRECCIÓN'),1,0,'C',1);
    $this->Cell(25,10,utf8_decode('TELÉFONO'),1,1,'C',1);
   
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
    $this->Cell(-350,10,date('d/m/Y'),0,1,'C').$this->Cell(0,-10,'Lempira Automotriz',0,0,'R');

}
}
  ob_start();
  $pdf = new PDF();
  
  $pdf -> AliasNbPages();
  $pdf->AddPage();
  $pdf->SetFont('Arial','B',12);
  $w=50;
  $h=10;
  //$pdf->Image("public/img/Imagen2.png");
  for($i=0; $i<count($datos['data']); $i++){
    //$pdf->SetFillColor(11,63,71);
    //$pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(10,10,$i+1,1,0,'C',0);
    $pdf->Cell(10,10,utf8_decode($datos["data"][$i]["id"]),1,0,'C',0);
    $pdf->SetFont('Arial','B',10);
    $x=$pdf->GetX();
    $pdf->MyCell(45,10,$x,utf8_decode(' '.$datos["data"][$i]["nombre_proveedor"]),1,0,'C',0);
    $pdf->Cell(55,10,utf8_decode($datos["data"][$i]["correo"]) ,1,0,'C',0);
    $x=$pdf->GetX();
    $pdf->MyCell($w,$h,$x,utf8_decode(' '.$datos["data"][$i]["direccion"]),1,0,'C',0);
    $pdf->Cell(25,10,utf8_decode($datos["data"][$i]["telefono_proveedor"]),1,1,'C',0);
    
    $x=$pdf->GetX();
    //$pdf->Cell(50,10,utf8_decode($datos["data"][$i]["direccion"]),1,1,'C',0);
   }

  $pdf->Output();
  ob_end_flush();

?>




