<div >

    <?php
        include('bdd.php');

        if(
            (isset($_POST['mot']) && ($_POST['mot']!= NULL)) &&
            (isset($_POST['def']) && ($_POST['def']!= NULL))

            )
            {   $mot = strip_tags($_POST['mot']);
                $def = strip_tags($_POST['def']);

                $lettre = substr("$mot",0,1);       // extrait la premiere lettre du mot ou $lettre = $nom[0];

                $mot = ucfirst(mb_strtolower($mot));   // met la premiere lettre du mot en majuscule et le reste en minuscule mb_ permet d'écrire les accents dans la base de données

                $lettre = mb_strtoupper($lettre);      // met la lettre en majuscule mb_ permet d'écrire les accents dans la base de données

                $def = ucfirst(mb_strtolower($def));   // met la premiere lettre de la phrase en majuscule et le reste en minuscule mb_ permet d'écrire les accents dans la base de données
                
                $query = " UPADTE liste SET mot=:mot, lettre=:lettre, def=:def WHERE id=:id ";
                $requete = $bdd->prepare($query);
                $requete->bindValue(':mot', $mot, PDO::PARAM_STR);
                $requete->bindValue(':lettre', $lettre, PDO::PARAM_STR);
                $requete->bindValue(':def', $def, PDO::PARAM_STR);
                $requete->bindValue(':id', $id, PDO::PARAM_INT);
                $requete->execute();

                echo "<script>window.location.href='../PHP/index.php?page=1';</script>"; // évite un message d'erreur lors de la redirection vers une autre page

            }

            if(isset($_POST['id']) && !empty($_POST['id'])){
                $query = $bdd->prepare($sql);
                select from glossaire where id:=id;
            
                $query->bindValue(':id', $id, PDO::PARAM_INT);
                $query->execute();
            
                $result = $query->fetch();
            }

    ?>

</div>