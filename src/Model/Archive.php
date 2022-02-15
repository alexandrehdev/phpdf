<?php 
namespace MyApp\Model;
use FPDF;

class Archive
{
	public $pdf;

	function __construct()
	{
		$this->pdf = new FPDF();
	}

	public function generatePDF(){
		$this->pdf->AddPage();
		$this->pdf->SetFont('Arial','B',16);
		$this->pdf->Cell(40,10,'Hello World!');
		$this->pdf->Output();
	}
	
}

?>