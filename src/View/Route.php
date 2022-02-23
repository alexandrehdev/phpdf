<?php
namespace MyApp\View;

	class Route
	{
		public static function getPage($folder){
			echo file_get_contents("src/View/{$folder}/index.php");
		}

	
	}
 ?>
