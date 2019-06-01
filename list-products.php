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

		<link rel="stylesheet" href="stylesheeet.css">
		<link rel="stylesheet" href="css-list-products.css">



	</head>
	<body>
		<?php require_once "header.php" ?>
    <div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default text-center mt-3" >
        <div class="panel-heading panel-title">BLONDE</div>
        <div class="panel-body"><img src="img/IMG-20190523-WA0105.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a class="more stretched-link" href="articles.php">Ver más</a></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default text-center mt-3">
        <div class="panel-heading">IPA</div>
        <div class="panel-body"><img src="img/IMG-20190523-WA0105.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer" class="footer"><a class="more stretched-link" href="articles.php">Ver más</a></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default text-center mt-3">
        <div class="panel-heading">SESSION IPA</div>
        <div class="panel-body"><img src="img/IMG-20190523-WA0105.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a class="more stretched-link" href="articles.php">Ver más</a></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default text-center mt-3">
        <div class="panel-heading">OKTOBERFEST</div>
        <div class="panel-body"><img src="img/IMG-20190523-WA0105.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a class="more stretched-link" href="articles.php">Ver más</a></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default text-center mt-3">
        <div class="panel-heading">PORTER</div>
        <div class="panel-body"><img src="img/IMG-20190523-WA0105.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a class="more stretched-link" href="articles.php">Ver más</a></div>
      </div>
    </div>
		<?php require_once "footer.php" ?>
	</body>
</html>
