<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="http://localhost:1234/main.css" />
    <script src="http://localhost:1234/main.js"></script>
  </head>
  <body>
  <?php $pathname = $_SERVER["PATH_INFO"] ?? "/" ?>

  <?php require_once "./views/partials/header.php" ?>

  <?php

  if($pathname === "/") {
      require_once "./views/home.php";
  } elseif ($pathname === "/search") {
      require_once "./views/search.php";
  } elseif ($pathname === "/about") {
      require_once "./views/about.php";
  }
  else {
      echo "page non trouvée";
  }
  ?>

    <?php require_once "./views/partials/footer.php" ?>
  </body>
</html>
