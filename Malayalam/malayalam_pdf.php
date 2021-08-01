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
    $pdf->Cell(0,60,"AFFIDEVIT",0,1,'C');

   $pdf->Cell(0,10,"$v_number നമ്പർ വാഹനത്തിൽ ( $v_type ) യാത്രചെയ്യുന്ന $name എന്ന ഞാൻ ",0,1,'C');
   $pdf->Cell(0,10," ( $address )",0,1,'C');
   $pdf->Cell(0,10," $reason പോകുന്നു. ",0,1,'C');
   $pdf->Cell(0,10,"എന്നോടൊപ്പമുള്ളത് $with_you ആണ്.",0,1,'C');
   $pdf->Cell(0,10,"ഞാൻ $return_d_t തിരിച്ചു പോകും.",0,1,'C');
   $pdf->Cell(0,20," ",0,1,'C');
  
                

   $pdf->Cell(0,10,"പേര് : $name",0,1,'R');
   $pdf->Cell(0,10,"മൊബൈൽ നമ്പർ : $mob",0,1,'R');

    $pdf->Cell(0,10,"തീയതി : $currentDate",0,1,'L');
    $pdf->Cell(0,10,"സ്ഥലം : $place",0,1,'L');
    $pdf->Cell(0,10,"സമയം : $currentTime",0,1,'L');


    $file = time().'.pdf';
    $pdf->output($file,'D');


}

?>