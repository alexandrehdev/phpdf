<?php
namespace MyApp\View;

	class Route
	{
		public static function getPage($folder){
			header("Location: src/View/{$folder}/index.php");
		}


	}
 ?>
