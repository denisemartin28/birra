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
		<link rel="stylesheet" href=>
		<title>Listado de Productos</title>
	</head>
	<body>
		<div class="container">
			<main>
				<section class="product-container"> <!-- Contenedor de todos los productos-->
          <?php foreach ($products as $oneProduct): ?>
						<article class="producto"><!-- Contenedor de cada producto -->
							<img class="main-photo" src="img/<?= $oneProduct["img"] ?>" alt="">
							<h2 class="name"> <?= $oneProduct["title"] ?> </h2>
							<p><?php echo $oneProduct["shortDescription"] ?></p>
							<a class="more" href="#">ver más</a>
						</article>
					<?php endforeach; ?>
				</section>

			</main>
		</div>

	</body>
</html>
