<?php
namespace MyApp\Controller;
use MyApp\Model\Archive as ArchiveModel;

class Archive extends GetData
{
	public function createFile(){
		(new ArchiveModel())->generatePDF();
	}
}

?>
