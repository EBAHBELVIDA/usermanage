
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="red">
        <!-- <nav class="navbar  bg-body-dark" data-bs-theme="dark"> -->
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                       
                            <a class="nav-link active" style="color: white;" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" style="color: white;" href="se_connecter.php">Se connecter</a>
                            </li>
                           
                       
                        <?php if (isset($_SESSION['user'])) : ?>
                           
                           
                            <li class="nav-item">
                                <a class="nav-link" style="color: white;" href="mot_de_passe_oublier.php">Deconnexion</a>
                            </li>
                        <?php else : ?>
                          
                         <li class="nav-item">
                                <a class="nav-link" style="color: white;" href="profil.php">Mon compte</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- <ul class="nav justify-content-center  ">
    <li class="nav-item">
        <a class="nav-link active" href="index.php" aria-current="page">Accueil</a>
    </li>
    <li class="nav-item">
            <a class="nav-link" href="ajout.php">Ajouter un etudiant</a>
        </li>


    <?php if (isset($_SESSION['user'])) : ?>
        <li class="nav-item">
            <a class="nav-link" href="list.php">Emploie </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="ajout.php">Mon compte</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="deconnexion.php">Deconnexion</a>
        </li>
    <?php else : ?>
        <li class="nav-item">
            <a class="nav-link" href="connexion.php">Se connecter</a>
        </li>
    <?php endif; ?>
</ul> -->
    </main>
    <footer>
     
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>