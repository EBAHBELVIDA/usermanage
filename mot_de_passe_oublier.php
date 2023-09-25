<?php
require_once('config/connect.php');




?>
<!doctype html>
<html lang="fr">

<head>
  <title>Connecxion</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <?php require_once('partials/header.php') ?>
  <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold text-center animate__animated animate__bounce text-primary">Grérer mes comptes</h1>

      <div class="card-body">
        <div class="mt-5 row">

          <div class="col-md-6 offset-md-3">
            <form action="" method="post" autocomplete="false">
              <div class="card p-3">
                <?php if ($success_message != '') {
                  echo "<div class='alert alert-success mb-3'>$success_message</div>";
                }    ?>
                <?php if ($erreur_message != '') {
                  echo "<div class='alert alert-danger mb-3'>$erreur_message</div>";
                }    ?>

                <div class="mb-3">
                  <input autocomplete="false" class='form-control' required type="email" name="email" placeholder="Email  ">
                </div>
                <div class="mb-3">
                  <input autocomplete="false" class='form-control' required type="Password" name="Password" placeholder="Password  ">
                </div>
                <button class="btn btn-lg btn-outline-danger">Mes infos</button>
              </div>
            </form>
          </div>
        </div>
      </div>


      <?php // require_once('form_ajout.php') 
      ?>
    </div>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>