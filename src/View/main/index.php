<?php
require_once("../../../vendor/autoload.php");
use MyApp\Controller\Archive;
use MyApp\Controller\GetData;

if (isset($_POST['btn'])) {
	(new Archive())->createFile();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/variables.css">
	<link rel="stylesheet" type="text/css" href="css/elements.css">
	<title></title>
</head>
<body>
	<!-- criar modal com descrição do sistema -->
	<header class="main-header">
		<div class="title">
			<!-- <h1>PH-PDF</h1> icon for this project-->
		</div>
		<div class="navigation">
			<span>Contato</span>
			<span>Sobre</span>
		</div>
	</header>
	<main>
		<!-- <div class="content-title">
			<h1>Crie seu PDF</h1>
		</div> -->
		<div class="form-content">
			<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
				<div>
					<input type="text" name="title" placeholder="Title">
				</div>
				<div>
					<textarea name="body-text" placeholder="Text Content"></textarea>
				</div>
				<div>
					<input type="submit" name="btn" value="Generate PDF">
				</div>
			</form>
		</div>
	</main>
</body>
</html>
