
<?php
    include('bdd.php');

    if(
        (isset($_POST['ident']) && ($_POST['ident']!= NULL)) &&
        (isset($_POST['mdp']) && ($_POST['mdp']!= NULL))

        )
        {   $ident = strip_tags($_POST['ident']);
            $hash = password_hash($_POST['mdp'],PASSWORD_BCRYPT); // mot de passe protégé lors de l'inscription dans la base de données
            $dates_user = date('Y-m-d H:i:s');

            $query = 'INSERT INTO users (ident, mdp, dates_user) VALUES (:ident, :mdp, :dates_user)'; // users est le nom de la table, dates ne doit pas être nommé date, car date est un mot réservé
            $requete = $bdd->prepare($query);
            $requete->bindValue(':ident', $ident, PDO::PARAM_STR);
            $requete->bindValue(':mdp', $hash, PDO::PARAM_STR);
            $requete->bindValue(':dates_user', $dates_user, PDO::PARAM_STR);
            $requete->execute();

            // header('Location: ../PHP/index.php?page=1');

            echo "<script>window.location.href='../PHP/index.php?page=1';</script>"; // évite un message d'erreur lors de la redirection vers une autre page

        }
?>
