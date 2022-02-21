<?php

namespace Models;

// Class qui contient la connexion à la base de données

class Database
{

  protected function getPDO()
  {
    // try {
    $pdo = new \PDO(
      'mysql:host=localhost;dbname=exo_survey_animal;charset=utf8',
      'root',
      '',
      [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
      ]
    );
    // } catch (\PDOException $e) {
    //  echo  $e->getMessage();
    // }
    return $pdo;
  }
}
