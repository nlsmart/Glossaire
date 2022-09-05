
echo'<br><br>';

foreach (range('A', 'Z') as $alphabet) {
    echo $alphabet." ";
}

echo'<br><br>';

foreach (range('0', '10') as $alphabet) {
    echo $alphabet." ";
}

echo'<br><br>';

foreach (range('z', 'a') as $alphabet) {
    echo $alphabet." ";
}

<a href="https://twitter.com/angela_bradley">My Twitter</a>
<?php
----- My PHP Code----
?>

<?php
----- My PHP Code----
?>
<a href="https://twitter.com/angela_bradley">My Twitter</a>
<?php
----- My PHP Code----
?>

<?php
Echo "<a href=https://twitter.com/angela_bradley>My Twitter</a>"
?>

<a href="https://twitter.com/angela_bradley">My Twitter</a>
<?php
Echo "<a href=$url>$site_title</a>"
?>

echo '<a href="http://www.website.com/page.html">Click here</a>';

$hello = "world";
echo "Hello, $hello!"; //displays "Hello, world!"
echo 'Hello, $hello!'; //displays "Hello, $hello!"
echo 'Hello, '.$hello.'!'; //displays "Hello, world!"

 foreach ($values as $value) {
      echo "<li><a href='details.php?id=" . $row['model_id'] . "'>" . $value['bikeName'] . "</a></li>";
    }

=============
$query = 'INSERT INTO user (ident, mdp, dates_user) VALUES (:ident, :mdp, :dates_user)'; // users est le nom de la table, dates ne doit pas être nommé date, car date est un mot réservé
        $requete = $bdd->prepare($query);
        $requete->bindValue(':ident', $ident, PDO::PARAM_STR);
        $requete->bindValue(':mdp', $mdp, PDO::PARAM_STR);
        $requete->bindValue(':dates_user', $dates_user, PDO::PARAM_STR);
        $requete->execute();

query = 'INSERT INTO list (mot, lettre, def, dates_list) VALUES (:mot, :lettre, :def, :dates_list)'; // users est le nom de la table, dates ne doit pas être nommé date, car date est un mot réservé
        $requete = $bdd->prepare($query);
        $requete->bindValue(':mot', $mot, PDO::PARAM_STR);
        $requete->bindValue(':lettre', $lettre, PDO::PARAM_STR);
        $requete->bindValue(':def', $def, PDO::PARAM_STR);
        $requete->bindValue(':dates_list', $dates_list, PDO::PARAM_STR);
=====================
