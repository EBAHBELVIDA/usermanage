 <div>
   
   <?php session_start();
    require_once('config/env.php') ?>
   <!doctype html>
   <html lang="fr">

   <head>
     <title><?= SITE_NAME ?></title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="style.css">
     <!-- Bootstrap CSS v5.2.1 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

   </head>

   <body>
     <?php require_once('partials/header2.php') ?>

     <div class="p-5 mb-4 bg-light rounded-3">
       <div class="container-fluid py-5">
         <h1 class="display-5 fw-bold animate__animated animate__wobble text-primary">Bienvenu sur Chaty</h1>
         <p class="col-md-8 fs-4"> <br> Inscrivez vous pour avoir plus de détaille </p>
         <a class="btn btn-primary btn-lg" href="inscription.php">Inscription</a>
       </div>
     </div>
    
     <!-- Bootstrap JavaScript Libraries -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
     </script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
     </script>
   </body>
   
 </div>
 
 </html>