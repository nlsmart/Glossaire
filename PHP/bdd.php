
<?php

date_default_timezone_set("Europe/Paris"); // la date doit-être convertie avant le isset...

//Base de donnée est normalement un fichier à part qui se greffe via  " include('bdd.php') " 

if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}
try
{
    $bdd = new PDO('mysql:host=127.0.0.1:3306;dbname=glossaire;charset=utf8','root',''); // glossaire est le nom de la base de donnés dbname=glossaire
    $bdd-> setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd-> setATTRIBUTE(PDO::ERRMODE_SILENT, PDO::ERRMODE_WARNING);
    $bdd-> setATTRIBUTE(PDO::ATTR_EMULATE_PREPARES,false);
}
catch(PDOexception $e)
{
    echo'echec de la connexion: '.$e->getMessage();
    exit;
}

?>
