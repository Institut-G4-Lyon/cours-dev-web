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
      require_once "./src/Controller/HomeController.php";
      $homeController = new HomeController();
      $homeController->index();

  } elseif ($pathname === "/search") {
      require_once "./src/Controller/SearchController.php";
      $controller = new SearchController();
      $controller->index();
  } elseif ($pathname === "/about") {
      require_once "./src/Controller/AboutController.php";
      $controller = new AboutController();
      $controller->index();
  }
  elseif ($pathname === "/articles") {
      require_once "./src/Controller/ArticleController.php";
      $controller = new ArticleController();
      $controller->index();
  }
  elseif ($pathname === "/login") {
      require_once "./src/Controller/AuthController.php";
      $controller = new AuthController();
      $controller->login();
  }
  elseif ($pathname === "/admin") {
      require_once "./src/Controller/AdminController.php";
      $controller = new AdminController();
      $controller->index();
  }
  else {
      echo "page non trouvée";
  }
  ?>

    <?php require_once "./views/partials/footer.php" ?>
  </body>
</html>
