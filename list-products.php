<?php
	$products = [
		[
			"id" => 1,
			"img" => "",
			"name" => "Blonde",
			"price" => 100,
			"shortDescription" => "blablablabla",
		],
		[
			"id" => 2,
			"img" => "",
			"name" => "IPA",
			"price" => 100,
			"shortDescription" => "blablablablabl",

		],
		[
			"id" => 3,
			"img" => "",
			"name" => "Session IPA",
			"price" => 100,
			"shortDescription" => "blablablablabla",

		],
		[
			"id" => 4,
			"img" => "",
			"name" => "Oktoberfest",
			"price" => 100,
			"shortDescription" => "blablablablabla",
		],
		[
			"id" => 5,
			"img" => "",
			"name" => "Porter",
			"price" => 100,
			"shortDescription" => "blablablabla" ,

		],
	];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Listado de productos</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css-list-products.css">
<link rel="stylesheet" href="stylesheet.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
	<?php require_once "header.php" ?>
    <div class="container">
        <div class="row">
            <div class="card-deck">
                <div class="card text-center mt-3">
                    <img src="img/IMG-20190523-WA0095.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">BLONDE</h5>
                        <p class="card-text">Alcohol – 3.8% </br>
							          Amargor – 28 IBUs</p>
                    </div>
                    <div class="card-footer">
                        <a class="more stretched-link" href="articles.php">Ver más</a>
                    </div>
                </div>
                <div class="card text-center mt-3">
                    <img src="img/IMG-20190523-WA0095.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">IPA</h5>
                        <p class="card-text">Alcohol – 5.1% </br>
							          Amargor –  40 IBUs</p>
                    </div>
                    <div class="card-footer">
                        <a class="more stretched-link" href="articles.php">Ver más</a>
                    </div>
                </div>
                <div class="card text-center mt-3">
                    <img src="img/IMG-20190523-WA0095.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SESSION IPA</h5>
                        <p class="card-text">Alcohol – 4.5% </br>
							          Amargor – 50 IBUs</p>
                    </div>
                    <div class="card-footer">
                        <a class="more stretched-link" href="articles.php">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div></br>
		<div class="container">
        <div class="row">
            <div class="card-deck">
                <div class="card text-center mt-3">
                    <img src="img/IMG-20190523-WA0095.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">OKTOBERFEST</h5>
                        <p class="card-text">Alcohol – 6.2% </br>
							          Amargor –  30 IBUs</p>
                    </div>
                    <div class="card-footer">
                        <a class="more stretched-link" href="articles.php">Ver más</a>
                    </div>
                </div>
                <div class="card text-center mt-3">
                    <img src="img/IMG-20190523-WA0095.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PORTER</h5>
                        <p class="card-text">Alcohol –  5.5% </br>
							          Amargor – 35 IBUs</p>
                    </div>
                    <div class="card-footer">
                        <a class="more stretched-link" href="articles.php">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once "footer.php" ?>
</body>
</html>
