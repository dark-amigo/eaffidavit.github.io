<?php

if(!empty($_POST['submit'])){
    $v_number = $_POST['vehicle_numnber'];
    $v_type = $_POST['vehicle_type'];
    $name = $_POST['name'];
    $return_d_t = $_POST['return_d_t'];
    $reason = $_POST['reason'];
    $address = $_POST['address'];
    $with_you = $_POST['with_you'];
    $mob = $_POST['mob'];
    $place = $_POST['place'];

    $currentDate = date('Y/m/d');
    $currentTime = date('H:i:s');

    require("../fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont("Arial","",16);
    $pdf->Cell(0,60,"AFFIDAVIT",0,1,'C');

   $pdf->Cell(0,10,"I $name, am traveling ",0,1,'C');
   $pdf->Cell(0,10," in a/an $v_type  with the number $v_number ",0,1,'C');
   $pdf->Cell(0,10," alone / with $with_you ",0,1,'C');
   $pdf->Cell(0,10," for $reason.",0,1,'C');
   $pdf->Cell(0,10," I will return at $return_d_t. ",0,1,'C');
   $pdf->Cell(0,20," ",0,1,'C');
  
                

   $pdf->Cell(0,10,"Name : $name",0,1,'R');
   $pdf->Cell(0,10,"Mobile Number : $mob",0,1,'R');

    $pdf->Cell(0,10,"Date : $currentDate",0,1,'L');
    $pdf->Cell(0,10,"Place : $place",0,1,'L');
    $pdf->Cell(0,10,"Time : $currentTime",0,1,'L');


    $file = time().'.pdf';
    $pdf->output($file,'D');


}

?>
