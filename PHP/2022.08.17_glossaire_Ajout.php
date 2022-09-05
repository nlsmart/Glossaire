<div >

    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12">

                <form method= "post" action="../PHP/2022.08.17_glossaire_Ajout_Trait.php">

                <br>
                <p class="text-uppercase fs-3 fw-bold">Ajouter un mot au glossaire :</p>

                <div class="mb-3 mt-3">
                <label for = "mot" class="form-label">Mot :</label>
                <input type="text" class="form-control" name="mot" id="mot" value="Mot" style="width:500px" required>
                </div>

                <div class="mb-3">
                <label for="def">Définition du mot :</label><br>
                <textarea id="def" name="def" rows="6" placeholder="Tapez votre définition ici." style="width:500px" required></textarea>
                </div>

                <div class="mb-3">
                <button type="submit" class="btn btn-primary" value="Envoyer" style="width: 100px">Envoyer</button>
                <button type="reset" class="btn btn-primary" value="Effacer" style="width: 100px">Effacer</button>
                </div>

                </form>
            </div>
        </div>
    </div>

</div>