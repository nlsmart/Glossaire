<?php

    $query = " SELECT * FROM liste WHERE id=../ " ;

    $req = $bdd -> prepare($query);

    $req -> execute() ;

    ($data = $req -> fetch()) {

        echo' '.$data['ident'].' <br> '.$data['mdp'].' <br> '.$data['dates_user'].' ';

    }
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
                <input type="hidden" class="form-control" name="id" value="$['id']" style="width:500px" disabled> <!-- Pour désactiver la saisie de la case mot -->
                </div>

                <div class="mb-3">
                <label for="def">Définition du mot à modifier :</label><br>
                <textarea id="def" name="def" rows="6" placeholder="Tapez votre définition ici." style="width:500px" required></textarea>
                </div>

                <div class="mb-3">
                <button type="submit" class="btn btn-primary" value="Envoyer" style="width: 200px">Modifier et Enregistrer</button>
                <button type="reset" class="btn btn-primary" value="Effacer" style="width: 100px">Effacer</button>
                </div>

                </form>
            </div>
        </div>
    </div>

</div>