

    <div class="col-md-5 offset-md-4">
        <?php
        if (isset($_POST['inscription'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password$password'];
            echo"<divclass='alert alert-succes'> bongour bienvenu  $nom!</div> ";
        }
            // $user = [
            //     'usernam' => $nom,
            //     'prenom' => $prenom,
            //     'email' => $email,
            //     'password' => $password,
            // ];
            // $_SESSION['user'] = $user;
            // header('location:heaser2.php');
       

        ?>

        <form action="" method="post" >

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
                <div>
                <a class="btn btn-primary btn-lg" type="submit" name="inscription" href="profil.php">s'inscrire</a>
                </div>
            </div>

        </form>
    </div>
