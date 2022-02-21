<?php

namespace Models;

// Class qui contient la connexion à la base de données

class Database
{

  protected function getPDO()
  {
    try {
      $pdo = new \PDO(
        'mysql:host=db5006696221.hosting-data.io:3306;dbname=dbs5540466;charset=utf8',
        'dbu2300196',
        'survey_animals@ionos2022',
        [
          \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
          \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ]
      );
    } catch (\PDOException $e) {
      echo  $e->getMessage() ;
    }
    return $pdo;
  }
}
