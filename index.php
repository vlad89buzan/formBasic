<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width">
  <title>Формы</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
  <?php
      echo "<pre>";
      if($_POST) {
          print_r($_POST);
      }
      echo "</pre>";
  ?>
</div>
</body>
</html>

