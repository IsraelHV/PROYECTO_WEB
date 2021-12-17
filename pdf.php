<?php

    /*
    Imagen ($ archivo, $ x = '', $ y = '', $ w = 0, $ h = 0, $ type = '', $ link = '', $ align = '', $ resize = false, $ dpi = 300, $ palign = '', $ ismask = false, $ imgmask = false, $ border = 0, $ fitbox = false, $ hidden = false, $ fitonpage = false, $ alt = false, $ altimgs = matriz ())
    */

    require("./fpdf184/fpdf.php");


    class PDF extends FPDF{
        //Cabecera en el documento
        function Header(){
            
            $this->Ln(20);
        }

        function Footer(){
            $this->Image('./Imagenes/logo-ipn.png',0,4,45,28);
            $this->Image('./Imagenes/escudoESCOM.png',150,4,45,24);
            $this->SetY(-20);
            $this->SetFont('helvetica','I',10);
            $this->Cell(0,5,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
        }


    }

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf -> AddPage();

    $pdf -> SetFont('Helvetica','B',20);

    $pdf->Ln(10);



    for($i=1;$i<=35;$i++){
        $pdf -> Cell(190,20, "Hola Mundo".$i,1,1,'C');
        $pdf -> Cell(190,20, "Número uno, es lo que es XD".$i,1,1,'C');
        $pdf->Ln(5);
    }
        
    $pdf -> Output();

?>