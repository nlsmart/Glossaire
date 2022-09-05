<?php

    include('bdd.php');

    $query = " SELECT mot, def FROM liste WHERE id=:id " ;
    // SELECT mot FROM liste WHERE id=5;

    $req = $bdd -> prepare($query);

    $req->bindValue(':id', $_GET['id'], PDO::PARAM_STR);

    $req -> execute() ;

    $data = $req -> fetch()

?>

<div >

    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12">

                <form method= "post" action="../PHP/2022.08.17_glossaire_Modification_Trait.php">

                <br>
                <p class="text-uppercase fs-3 fw-bold">Modifier la définition du mot suivant :</p>

                <div class="mb-3 mt-3">
                <label for = "mot" class="form-label">Mot :</label>
                <input type="text" class="form-control" name="id" value="<?php echo $data['mot']; ?>" style="width:500px" required> <!-- Pour désactiver la saisie de la case mot -->
                </div>

                <div class="mb-3">
                <label for="def">Définition du mot à modifier :</label><br>
                <!-- <textarea id="def" name="def" rows="6" placeholder="<?php echo $data['def']; ?>" style="width:500px" required></textarea> -->
                <textarea name="def" rows="6" id="def" style="width:500px"> <?php echo $data['def']; ?> </textarea>
                </div>

                <div class="mb-3">
                <button type="submit" class="btn btn-primary" value="Envoyer" style="width: 200px">Modifier et Enregistrer</button>
                <button type="reset" class="btn btn-primary" value="Effacer" style="width: 100px">Effacer</button>

                <a href="../PHP/2022.08.17_glossaire_Sortie.php">
                <button class="btn btn-primary" style="width: 150px">Retour à la liste</button>
                </a>
                </div>

                </form>

            </div>
        </div>
    </div>

</div>