</html><?php session_start(); ?>
<?php require_once('partials/header2.php') ?>
<!doctype html>
<html lang="fr">

<head>
    <title>profil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="mt-5 row">

        <div class="col-md-8 offset-md-2">

            <form action="" method="post">
                <div class="contrainer">
                    <div class="row">
                        <div class="col-md-8 mt-5">
                            <div class="display-5 fw-bold text-primary">
                                <h1 class="col-md-5 offset-md-4"> Mon Profil</h1>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <input type="text" required class="form-control" placeholder="Nom">
                                    </div>
                                    <div class="col-md-6 mt-2 pd-5">
                                        <div><button class="btn bnt-sm btn-info"> Motifier</button>
                                            <button class="btn bnt-sm btn-danger">supprimer</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <input type="text" required class="form-control" placeholder="Prénom">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <div><button class="btn bnt-sm btn-info"> Motifier</button>
                                            <button class="btn bnt-sm btn-danger">supprimer</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <input type="text" required class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <div><button class="btn bnt-sm btn-info"> Motifier</button>
                                            <button class="btn bnt-sm btn-danger"> supprimer</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <input type="text" class="form-control" required placeholder="Password">
                                    </div>
                                    <div class="col-md-6 mt-2 pd-5">
                                        <div><button class="btn bnt-sm btn-info"> Motifier</button>
                                            <button class="btn bnt-sm btn-danger"> supprimer</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-primary btn-lg mt-2" href=" mot_de_passe_oublier.php"> Déconnexion</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>

        </div>
      


        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>