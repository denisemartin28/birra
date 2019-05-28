<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>footer</title>
  </head>
  <?php
  $contacto=[
    "011-3418-2010",
    "Bacacay 5665, Pilar",
    "chmstefani@gmail.com",
  ]
   ?>
  <body>
    <footer>
      <div class="container-footer">
        <ul class="footer">
            <?php foreach ($contacto as $valor) : ?>
              <li ><?php echo $valor; ?></li>
            <?php endforeach; ?>
        </ul>
      </div>
    </footer>

  </body>
</html>
