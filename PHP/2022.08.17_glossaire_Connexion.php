<div >
    <!-- <p>Connexion :</p> -->

    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12">

                <br>
                <p class="text-uppercase fs-3 fw-bold">Connexion à votre compte :</p>

                <form method= "post" action="../PHP/2022.08.17_glossaire_Connexion_Trait.php">

                <div class="mb-3 mt-3">
                <label for="ident" class="form-label" for = "ident" >Nom :</label>
                <input type="text" class="form-control" name="ident" id="ident" value="Alain" style="width:500px" required>
                </div>

                <div class="mb-3">
                <label for="mdp" class="form-label">Mot de passe :</label>
                <input type="password" class="form-control" name="mdp" id="mdp" value="totoplage" style="width:500px" required>
                </div>

                <div class="mb-3">
                <button type="submit" class="btn btn-primary" value="Envoyer" style="width: 100px">Connexion</button>
                <button type="reset" class="btn btn-primary" value="Effacer" style="width: 100px">Effacer</button>
                </div>

                <hr>

                <div>
                    <p>Formulaire d'inscription au glossaire :</p>
                    <a class="nav-link text-light" href="../PHP/index.php?page=4">
                    <button type="button" class="btn text-white bg-primary">Inscription</button>
                    </a>
                </div>

                </form>
            </div>
        </div>
    </div>

<br>

</div>