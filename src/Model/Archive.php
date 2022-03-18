<?php
namespace MyApp\Model;
use MyApp\Controller\Archive as ArchiveController;
use Fpdf\Fpdf;

class Archive extends ArchiveController
{
	public $pdf;

	function __construct()
	{
		parent::__construct();

		$this->pdf = new Fpdf();
	}

	public function generatePDF(){
		$this->pdf->AddPage();
		$this->pdf->SetFont('Arial','B',16);
		$this->pdf->Cell(40,10, $this->getTitle());
		$this->pdf->Cell(10,30, $this->getContent());
		$this->pdf->Output();
	}

}

?>
