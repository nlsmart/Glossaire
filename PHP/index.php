<?php
    include('bdd.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../fontawesome-free-6.1.2-web/css/all.css">
    
    <title>2022.08.17_glossaire_bootstrap_w</title>

</head>
<body>

<div>

<!--
    <nav class="navbar navbar-expand-lg bg-primary sticky-top border-bottom border-3 border-danger">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="../PHP/index.php?page=1">
            <img src="../ASSET/IMG/top.gif" alt="">
            GLOSSAIRE
            </a>

            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="../PHP/index.php?page=1">
                    <button type="button" class="btn btn-danger">Accueil</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="../PHP/index.php?page=2">
                    <button type="button" class="btn btn-warning">Ajout</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="../PHP/index.php?page=3">
                    <button type="button" class="btn btn-success">Connexion</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="../PHP/index.php?page=4">
                    <button type="button" class="btn btn-dark">Sortie</button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
-->

<nav class="navbar navbar-expand-lg bg-primary sticky-top border-bottom border-3 border-danger">
    <div class="container">

        <a class="navbar-brand text-white fw-bold" href="../PHP/index.php?page=1">
            <img src="../ASSET/IMG/top.gif" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="../PHP/index.php?page=1">
                    <button type="button" class="btn text-light bg-danger">Accueil</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="../PHP/index.php?page=2">
                    <button type="button" class="btn text-dark bg-warning">Ajout</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="../PHP/index.php?page=3">
                    <button type="button" class="btn text-light bg-success">Connexion</button>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link text-light" href="../PHP/index.php?page=5">
                    <button type="button" class="btn btn-dark">Sortie</button>
                    <img src="../ASSET/IMG/Sortie.png" style="width:70px;height:37px;" alt="">
                    </a>
                </li> -->
            </ul> 

            <a class="nav-link text-light" href="../PHP/index.php?page=5">
                <button type="button" class="btn text-light bg-dark">
                <?php
                if (isset($_SESSION['ident']) && ($_SESSION['ident']!= NULL)) {
                    echo' '.$_SESSION['ident'].' ';
                }
                ?>
                </button>
            </a>

        </div>
        
    </div>
</nav>

<!--
<nav class="navbar navbar-expand-lg bg-primary sticky-top border-bottom border-3 border-danger">
    <div class="container">
        <a class="navbar-brand text-white fw-bold" href="../PHP/index.php?page=1">
        <img src="../ASSET/IMG/top.gif" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"> ligne d'origine
            <ul class="navbar-nav"> 
                <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="../PHP/index.php?page=1">
                <button type="button" class="btn btn-danger">Accueil</button>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="../PHP/index.php?page=2">
                <button type="button" class="btn btn-warning">Ajout</button>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="../PHP/index.php?page=3">
                <button type="button" class="btn btn-success">Connexion</button>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="../PHP/index.php?page=4">
                <button type="button" class="btn btn-dark">Sortie</button>
                </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
-->
    <!-- <div class="has-bg-img">
    <img class="bg-img img-fluid" src="../ASSET/IMG/Background_1.jpg" alt="Background_image">
    </div> -->

<div >
    <?php
        if (isset($_GET['page'])) {
            $page=$_GET['page'];
            if ($page == 1) {
                include('2022.08.17_glossaire_Accueil.php');
            }
            elseif ($page == 2) {
                include('2022.08.17_glossaire_Ajout.php');
            }
            elseif ($page == 3) {
                include('2022.08.17_glossaire_Connexion.php');
            }
            elseif ($page == 4) {
                include('2022.08.17_glossaire_Inscription.php');
            }
            elseif ($page == 5) {
                include('2022.08.17_glossaire_Sortie.php');
            }
            elseif ($page == 6) {
                include('2022.08.17_glossaire_Modification.php');
            }
            else {
                include('2022.08.17_glossaire_Accueil.php');
            }
        }
    ?>    
</div>

    <!-- <div class="main2"> .main2 </div> -->

    <!-- <div > .footer </div> -->

    <br><br><br><br> <!-- padding avec le footer  -->

<nav class="navbar bg-primary fixed-bottom border-top border-3 border-warning">
    <div class="container">
        <a class="navbar-brand text-dark " href="../PHP/index.php?page=1">
        <img src="../ASSET/IMG/cowsleep.gif" alt="" width="50" height="40">
        ?? Copyright 2022 nl.smart All rights reserved. 
        </a>
    </div>
</nav>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>
