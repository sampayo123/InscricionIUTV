<?php

require '../include/conexion.php' ;
require '../include/ver.php' ;
if(isset($_GET['cedula'])){

    $sql="SELECT * FROM usuarios WHERE cedula=:cedula";
  
    try{
        $estado = $con->prepare($sql);
     
        $estado->bindValue(':cedula',$_GET['cedula']);
        $estado->execute();
  
        $obtUser = $estado->fetch(PDO::FETCH_ASSOC);
     
    }catch(PDOExeption $e){
        print "Error: " .$e->getMessage()."<br/>";
        die();
    }
  
  
  }else{
    echo "se necesita un id";
    exit;
  }


require('./fpdf.php');



class PDF extends FPDF
{
// Page header
function Header()
{

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(40,10,'Datos y horario',0,0,'C');
    // Line break
    $this->Ln(20);
    $this->cell(40,10, 'Cedula:',0,0,'C',0);
     $this->cell(40,10, 'Nombre:',0,0,'C',0);
     $this->cell(40,10, 'Apellido:',0,0,'C',0);
     $this->cell(40,10,  'carrera:',0,0,'C',0);
     $this->cell(40,10, 'promedio:',0,1,'C',0);
     $this->cell(40,20,  'fecha:',0,0.5,'C',0);
    

}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

 foreach($r as $dato){
  
      } 

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

    $pdf->cell(40,10,  $obtUser['cedula'],0,0,'C',0);
     $pdf->cell(40,10,  $obtUser['nombre'],0,0,'C',0);
    $pdf->cell(40,10,  $obtUser['apellido'],0,0,'C',0);
     $pdf->cell(40,10,  $obtUser['carrera'],0,0,'C',0);
     $pdf->cell(40,10,  $obtUser['idpromedio'],0,1,'C',0);
     $pdf->cell(40,10,   $dato['fecha_inscripcion'],0,1,'C',0);
     


$pdf->Output();

?>