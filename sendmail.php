<?php

// début PHP
function connexpdo($base,$param) // fonction connexion
{
  include_once($param.".inc.php"); // fichier config

  $dsn="mysql:host=".HOST.";dbname=".$base; // chaine connexion

  $user=USER; // utilisateur BD

  $pass=PASS; // mot passe

  try // tester connexion
  {
    $idcom = new PDO($dsn,$user,$pass); // cree la connexion PDO

    return $idcom; // retourne connexion
  }

  catch(PDOException $except) // erreur PDO
  {
    echo "Echec de la connexion",$except->getMessage(); // affiche erreur

    return FALSE; // retourne faux

    exit(); // arrêt script
  }
}

?> //fin php
