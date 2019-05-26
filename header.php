<!DOCTYPE html>
<?php
$navbar=[
  "Home"=>"home.php",
  "Birras"=>"birras.php",
  "FAQ"=>"faq.php",
  "Ingresá"=>"login.php",
  "Registrate"=>"registrate.php"
]
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <header>
        <nav class="navbar">
          <ul>
            <?php foreach ($navbar as $pagina => $link): ?>
            <li><a href="<?php echo $link; ?>"><?php echo $pagina; ?></a></li>
            <?php endforeach; ?>
          </ul>

        </nav>
      </header>
    </div>
  </body>
</html>
