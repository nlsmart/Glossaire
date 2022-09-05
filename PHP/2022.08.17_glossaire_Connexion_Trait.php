
<?php
    include('bdd.php');

    if(
        (isset($_POST['ident']) && ($_POST['ident']!= NULL)) &&
        (isset($_POST['mdp']) && ($_POST['mdp']!= NULL))

        )
        {   $ident = strip_tags($_POST['ident']);
            $mdp = $_POST['mdp'];

            $query = "SELECT * FROM users WHERE ident = :ident ";

            $requete = $bdd->prepare($query);
            $requete->bindValue(':ident', $ident, PDO::PARAM_STR);
            $requete->execute();

            $data = $requete->fetch();

            // var_dump($data);

            if (!empty ($data)) {
                if (password_verify($mdp, $data['mdp'])) {
                    // $_SESSION['ident']=$data['ident'];
                    $_SESSION['ident']=$ident;
                    //$_SESSION['message'] = ' Oui, le login et le mot de passe sont corrects. '; // car le login et le mot de passe sont corrects
                    header('Location: ../PHP/index.php?page=1');
                }
                else {
                    $_SESSION['message'] = ' Non, le mot de passe n\'est pas correct. '; // car le mot de passe n'est pas correct
                    header('Location: ../PHP/index.php?page=3');
                }
            }
            else {
                $_SESSION['message'] = ' non, le login et le mot de passe ne sont pas corrects. '; // car le login et le mot de passe ne sont pas corrects
                header('Location: ../PHP/index.php?page=3');
            }

        }
?>
