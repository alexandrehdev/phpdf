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
		$this->pdf->SetFont('Arial','B',15);
		$this->pdf->Cell(30,10, $this->getTitle(), 0, 1, 'C');
		$this->pdf->Text(1,50, $this->getContent());
		$this->pdf->Output();
	}

}

?>
