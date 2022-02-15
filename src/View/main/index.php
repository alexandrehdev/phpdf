<?php 
require_once("../../../vendor/autoload.php");
use MyApp\Controller\Archive;
use MyApp\Controller\GetData;


if (isset($_POST['btn'])) {
	echo "asd";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="src/View/main/css/style.css">
	<link rel="stylesheet" type="text/css" href="src/View/main/css/variables.css">
	<link rel="stylesheet" type="text/css" href="src/View/main/css/elements.css">
	<title></title>
</head>
<body>
	<!-- criar modal com descrição do sistema -->
	<header class="main-header">
		<div class="title">
			<h1>PH-PDF</h1>
		</div>
		<div class="navigation">
			<span>Contato</span>
			<span>Sobre</span>
		</div>
	</header>
	<main>
		<div class="content-title">
			<h1>Crie seu PDF</h1>
		</div>
		<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
			<div>
				<label>Titulo</label>
				<input type="" name="" name="title" placeholder="Título">
			</div>
			<div>
				<label>Texto</label>
				<textarea name="body-text"></textarea>
			</div>
			<div>
				<input type="submit" name="btn" value="Gerar Arquivo">
			</div>
		</form>
	</main>
</body>
</html>