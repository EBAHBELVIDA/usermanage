<?php session_start();
require_once('config/env.php') ?>
<!doctype html>
<html lang="fr">

<head>
  <title><?= SITE_NAME ?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 
</head>

<body >
  <?php require_once('partials/header.php') ?>
  <div  class="mt-5 row">
    <div class="col-md-5 offset-md-2">
      <h1 class="display-4 fw-bold  text-primary">  connexion</h1>
      <div class="card p-3">
        <div class="mb-3">
          <input class='form-control' required type="text" name="Nom" placeholder="Nom">
        </div>
        <div class="mb-3">
          <input class='form-control' required type="text" name="Prémon" placeholder="Prémon">
        </div>
        <div class="mb-3">
          <input class='form-control' required type="email" name="email" placeholder="Email">
        </div>
        <div class="mb-3">
          <input class='form-control' required type="password" name="password" placeholder="Mot de passe">
        </div>
        <a class="mb-3" href="mot_de_passe_oublier.php">Mot de passe oublier</a>
        <a class="btn btn-primary btn-lg" href="profil.php">se connecter</a>

      </div>

    </div>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>