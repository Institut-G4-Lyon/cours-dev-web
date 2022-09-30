<?php require_once "vendor/autoload.php"; ?>

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
      $homeController = new \App\Controller\HomeController();
      $homeController->index();

  } elseif ($pathname === "/search") {
      $controller = new \App\Controller\SearchController();
      $controller->index();
  } elseif ($pathname === "/about") {
      $controller = new \App\Controller\AboutController();
      $controller->index();
  }
  elseif ($pathname === "/articles") {
      $controller = new \App\Controller\ArticleController();
      $controller->index();
  }
  elseif ($pathname === "/login") {
      $controller = new \App\Controller\AuthController();
      $controller->login();
  }
  elseif ($pathname === "/admin") {
      $controller = new \App\Controller\AdminController();
      $controller->index();
  }
  else {
      echo "page non trouvée";
  }
  ?>

    <?php require_once "./views/partials/footer.php" ?>
  </body>
</html>
