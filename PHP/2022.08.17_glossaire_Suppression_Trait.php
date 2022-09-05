<div >

    <?php
        include('bdd.php');

        if(
            (isset($_POST['mot']) && ($_POST['mot']!= NULL)) &&
            (isset($_POST['def']) && ($_POST['def']!= NULL))

            )
            {   /*$nom = htmlspecialchars($_POST['nom']);*/
                $mot = strip_tags($_POST['mot']);
                $def = strip_tags($_POST['def']);
                $dates_list = date('Y-m-d H:i:s');

                $lettre = substr("$mot",0,1);       // extrait la premiere lettre du mot ou $lettre = $nom[0];

                $mot = ucfirst(mb_strtolower($mot));   // met la premiere lettre du mot en majuscule et le reste en minuscule mb_ permet d'écrire les accents dans la base de données

                $lettre = mb_strtoupper($lettre);      // met la lettre en majuscule mb_ permet d'écrire les accents dans la base de données

                $def = ucfirst(mb_strtolower($def));   // met la premiere lettre de la phrase en majuscule et le reste en minuscule mb_ permet d'écrire les accents dans la base de données

                $query = 'INSERT INTO liste (mot, lettre, def, dates_list) VALUES (:mot, :lettre, :def, :dates_list)'; // users est le nom de la table, dates ne doit pas être nommé date, car date est un mot réservé
                $requete = $bdd->prepare($query);
                $requete->bindValue(':mot', $mot, PDO::PARAM_STR);
                $requete->bindValue(':lettre', $lettre, PDO::PARAM_STR);
                $requete->bindValue(':def', $def, PDO::PARAM_STR);
                $requete->bindValue(':dates_list', $dates_list, PDO::PARAM_STR);
                $requete->execute();

                // header('Location: ../PHP/index.php?page=1');

                echo "<script>window.location.href='../PHP/index.php?page=1';</script>"; // évite un message d'erreur lors de la redirection vers une autre page

            }

    ?>

</div>