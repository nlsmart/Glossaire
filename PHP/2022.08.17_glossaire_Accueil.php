<!-- <div >
    <p>Accueil :</p>
</div> -->

<br><br>

<p class="text-uppercase fs-3 fw-bold fst-italic text-center">glossaire</p>

<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-12">
            <?php
            if (isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset($_SESSION['message']); // détruit la variable de session message
            }
            ?>
        </div>
        <div class="col-lg-12">

        <div onclick="location.href='https://fr.wikipedia.org/wiki/Glossaire';"  style="cursor:pointer;" target="_blank">
            <a>
            <p class="text fs-6 fst-italic">
            Un glossaire est étymologiquement un recueil de gloses, c'est-<br>
            à-dire de termes étrangers ou rares associés à leurs définitions <br>
            et centré sur un domaine dont il détaille les termes techniques <br>
            spécifiques, comme l'informatique ou la médecine.</p>
            </a>
        </div>
            
        </div>
    </div>
</div>

<br><br>

<nav class="navbar">
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Mot à chercher dans le glossaire." aria-label="Search" style="width:400px">
                    <button class="btn btn-primary" type="submit">Chercher</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<br><br>

<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-lg-12">
        <div>
            <?php
                foreach (range('A', 'Z') as $alphabet) {
                    echo'<a href = "index.php?page=1&toto='.$alphabet.' ">';
                    echo'<button class="m-1 btn btn-primary"> '.$alphabet.' </button>';
                    echo'</a>';

                // echo "<a href='index.php?page=1&toto=".$alphabet."'>".$alphabet."</a>";
                // On peut ajouter un séparateur
                // if ($alphabet != "Z") echo " | ";
                }
            ?>
        </div>
        </div>
    </div>
</div>

<br><br>

<?php
    if((isset($_GET['toto']) && $_GET['toto'] !=null)){
        $lettre = $_GET['toto'];
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">

        <div class="accordion accordion-flush" id="accordionFlushExample">

        <?php
        
            $query ="SELECT mot, def FROM liste WHERE lettre =:lettre";   // $query = tous les elements de mon tableau
            // $query = "SELECT mot, def FROM liste ORDER BY lettre ASC "; // SELECT prenom, moyenne FROM etudiant ORDER BY moyenne ASC ;
            $req = $bdd -> prepare($query);     // On prepare la requete
            $req->bindValue(':lettre', $lettre, PDO::PARAM_STR);
            $req-> execute();

            $i=1;

            while($data = $req -> fetch()){  // Pour recuperer des elements precis dans le tableau 
        ?>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading<?php echo $i ?>">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i ?>">
                
                <div class="fw-bold">
                <?php
                    echo $data['mot'];
                ?>
                </div>

            </button>

            </h2>
            <div id="flush-collapse<?php echo $i ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $i ?>" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <?php
                    echo $data['def'];
                ?>
            </div>

            </div>
        </div>

        <?php
            $i++;
            }   // while 
        ?>

        <?php
            } // if
        ?>

        </div>
    </div>
</div>


