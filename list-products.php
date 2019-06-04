<?php
	$products = [
		[
			"id" => 1,
			"img" => "",
			"title" => "Blonde",
			"price" => 100,
			"shortDescription" => "blablablabla",
		],
		[
			"id" => 2,
			"img" => "",
			"title" => "IPA",
			"price" => 100,
			"shortDescription" => "blablablablabl",

		],
		[
			"id" => 3,
			"img" => "",
			"title" => "Session IPA",
			"price" => 100,
			"shortDescription" => "blablablablabla",

		],
		[
			"id" => 4,
			"img" => "",
			"title" => "Oktoberfest",
			"price" => 100,
			"shortDescription" => "blablablablabla",
		],
		[
			"id" => 5,
			"img" => "",
			"title" => "Porter",
			"price" => 100,
			"shortDescription" => "blablablabla" ,

		],
	];


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Listado de Productos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="css/stylesheet.css">
		<link rel="stylesheet" href="css/css-list-products.css">


	</head>
	<body id="body">
		<?php require_once "header.php" ?>
    <div class="container">
  <div class="row">
    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
      <div class="panel panel-default text-center mt-3" >
        <div class="panel-heading panel-title">BLONDE</div>
				<!-- La idea de las imágenes es poder ir a sacar fotos a la fábrica, para que sean originales. Por el momento por no haber podido ir agregamos fotos de internet. -->
        <div class="panel-body"><img src="img/blonde2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a class="more" class="stretched-link" href="articles.php">Ver más</a></div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
      <div class="panel panel-default text-center mt-3">
        <div class="panel-heading panel-title">IPA</div>
        <div class="panel-body"><img src="img/ipa2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer" class="footer"><a class="more stretched-link" href="articles.php">Ver más</a></div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
      <div class="panel panel-default text-center mt-3">
        <div class="panel-heading panel-title">SESSION IPA</div>
        <div class="panel-body"><img src="img/sessionipa2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a class="more stretched-link" href="articles.php">Ver más</a></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
      <div class="panel panel-default text-center mt-3">
        <div class="panel-heading panel-title">OKTOBERFEST</div>
        <div class="panel-body"><img src="img/oktoberfest2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a class="more stretched-link" href="articles.php">Ver más</a></div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
      <div class="panel panel-default text-center mt-3">
        <div class="panel-heading panel-title">PORTER</div>
        <div class="panel-body"><img src="img/porter2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a class="more stretched-link" href="articles.php">Ver más</a></div>
      </div>
    </div>
		<?php require_once "footer.php" ?>
	</body>
</html>
