<?php

use PDF as GlobalPDF;

require('/xampp/htdocs/lempira_automotriz/app/fpdf/fpdf.php');
  
  class PDF extends FPDF
{
 
  
                  
// Cabecera de página
function Header()
{
  
    // Arial bold 15
    
    $this->SetFont('Arial','B',25);
    // Movernos a la derecha
    $this->Cell(40);
    // Título
    $this->SetFillColor(0, 0, 255);
    $this->SetTextColor(0,0,0);
    $this->Cell(120,10,'Factura',0,1,'C',0);
    $this->Ln(10);
    // Movernos a la derecha
    $this->SetFont('Arial','B',28);
    $this->Cell(40);
    $this->Cell(120,10,'LEMPIRA AUTOMOTRIZ',0,1,'C',0);
    $this->SetFont('Arial','B',15);
    $this->Cell(40);
    $this->Cell(120,10,utf8_decode('EL HÉROE QUE RECORRE TUS CAMINOS'),0,0,'C',0);
    $this->Image('/xampp/htdocs/lempira_automotriz/public/img/Imagen2.png',10,10,33,0,'','http://localhost:8080/lempira_automotriz/');
        // Salto de línea
    $this->Ln(13);
    $this->SetFillColor(0, 255, 255);
    $this->SetTextColor(0,0,0);
    $this->SetFont('Arial','B',12);

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
  $datos["data"];
  $pdf->Ln(5);
  //$pdf->Image('/xampp/htdocs/lempira_automotriz/public/img/Imagen0.1.png',10,10,33,0,'','http://localhost:8080/lempira_automotriz/');
    $pdf->Cell(10,7,utf8_decode(''),0,0,'C',0);
    $pdf->Cell(45,7,utf8_decode('Direccion: Bulevar Juan Pablo II '),0,1,'L',0);
    $pdf->Cell(10,7,utf8_decode(''),0,0,'C',0);
    $pdf->Cell(45,7,utf8_decode('Correo:     lempira.automotrizhn@gmail.com '),0,1,'L',0);
    $pdf->Cell(10,7,utf8_decode(''),0,0,'C',0);
    $pdf->Cell(45,7,utf8_decode('Telefono:  +504 2234-5842 '),0,1,'L',0);
    $pdf->Cell(10,7,utf8_decode(''),0,0,'C',0);
    $pdf->Cell(45,7,utf8_decode('Fecha:       '.date('d/m/Y')),0,0,'L',0);



    $pdf->Ln(10);

    $pdf->Cell(10,7,utf8_decode(''),0,0,'C',0);
    $pdf->Cell(45,7,utf8_decode('FACTURAR A = '),0,1,'L',0);
    $pdf->Cell(10,7,utf8_decode(''),0,0,'C',0);
    $pdf->Cell(45,7,utf8_decode('Nombre: '),0,0,'L',0);
    $pdf->Cell(35,7,utf8_decode($datos["data"][0]["nombre"]),0,1,'L',0);
    $pdf->Cell(10,7,utf8_decode(''),0,0,'C',0);
    $pdf->Cell(45,7,utf8_decode('Direccion: '),0,0,'L',0);
    $pdf->Cell(40,7,utf8_decode($datos["data"][0]["direccion"]),0,1,'L',0);
    $pdf->Cell(10,7,utf8_decode(''),0,0,'C',0);
    $pdf->Cell(45,7,utf8_decode('Telefono Celular: '),0,0,'L',0);
    $pdf->Cell(40,7,utf8_decode($datos["data"][0]["telefono_celular"]),0,1,'L',0);
    $pdf->Cell(10,7,utf8_decode(''),0,0,'C',0);
    $pdf->Cell(45,7,utf8_decode('Telefono Fijo: '),0,0,'L',0);
    $pdf->Cell(40,7,utf8_decode($datos["data"][0]["telefono_fijo"]),0,1,'L',0);
    $pdf->Cell(10,7,utf8_decode(''),0,0,'C',0);
    $pdf->Cell(45,7,utf8_decode('No. Identidad: '),0,0,'L',0);
    $pdf->Cell(40,7,utf8_decode($datos["data"][0]["no_identidad"]),0,1,'L',0);
    $pdf->Ln(10);
    $pdf->SetFillColor(0, 255, 255);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(25,10,utf8_decode('Cantidad'),1,0,'C',1);
    $pdf->Cell(120,10,utf8_decode('Descripcion'),1,0,'C',1);
    $pdf->Cell(50,10,utf8_decode('Precio'),1,1,'C',1);
    $subtotal = 0;
    $envio = 0;
    $ISV = 0;
    $env = 0;
   // $pdf->Image("public/img/Imagen2.png");
  for($i=0; $i<count($datos["data"]); $i++){
    $pdf->SetFillColor(11,63,71);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(25,10,utf8_decode('1'),1,0,'C',0);
    $pdf->Cell(120,10,utf8_decode($datos["data"][$i]["marca"].' '.$datos["data"][$i]["modelo"].
    ' Color '.$datos["data"][$i]["color"]),1,0,'C',0);
    $pdf->Cell(50,10,"L. ".number_format($datos["data"][$i]["precio"]),1,1,'C',0);
    $can = $datos["data"][$i]["cantidad"];
    $pre = $datos["data"][$i]["PRECIO"]; 
    $envio = $datos["data"][$i]["envio"]; 
    $tot = $can*$pre;
    $subtotal += $tot;
    $env += $envio;
  }
  $pdf->Ln(15);
  $ISV = $subtotal *0.15;
  $total = $subtotal + $env+ $ISV;
  $pdf->SetFont('Arial','B',13);
  $pdf->Cell(115,10,utf8_decode(''),0,0,'C',0);
   $pdf->Cell(40,10,utf8_decode('SubTotal'),0,0,'L',0);
   $pdf->Cell(35,10,"L. ".number_format($subtotal),0,1,'L',0);
   $pdf->Cell(115,10,utf8_decode(''),0,0,'C',0);
   $pdf->Cell(40,10,utf8_decode('Envio'),0,0,'L',0);
   $pdf->Cell(35,10,"L. ".number_format($env),0,1,'L',0);
   $pdf->Cell(115,10,utf8_decode(''),0,0,'C',0);
   $pdf->Cell(40,10,utf8_decode('ISV 15%'),0,0,'L',0);
   $pdf->Cell(35,10,"L. ".number_format($ISV),0,1,'L',0);
   $pdf->Cell(115,10,utf8_decode(''),0,0,'C',0);
   $pdf->Cell(40,10,utf8_decode('Total a Pagar'),0,0,'L',0);
   $pdf->Cell(35,10,"L. ".number_format($total),0,1,'L',0);
   
   $pdf->Ln(8);
   $pdf->SetFillColor(0, 0, 255);
   $pdf->SetTextColor(0,0,0);
   $pdf->SetFont('Arial','B',12);
   $pdf->Cell(120,10,'Gracias por su Compra',0,1,'R',0);
   $pdf->Cell(5,10,utf8_decode(''),0,0,'C',0);
   $pdf->Cell(120,10,'Att: LEMPIRA AUTOMOTRIZ',0,1,'R',0);

  $pdf->Output();
  ob_end_flush();

?>