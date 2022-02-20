<?php

namespace Models;

include_once 'Database.php';

use Models\Database;

// ECRITURE DES DONNEES UTILISATEURS

class User extends Database
{

  // récupérer l'utilisateur par la clé de confirmation (keyconf)
  public function getUserbyKeyconf($keyConf)
  {
    // on se connecte à la base de données et on prépare la requête
    $result = $this->getPDO()->prepare("SELECT * FROM user WHERE key_conf=:key_conf");
    //on éxecute la requête
    // on récupere les données dans un tableau
    $result->execute(array('key_conf' => $keyConf));
    // on renvoie les données 
    return $result->fetch();
    $result->closeCursor();
  }
}
