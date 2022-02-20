<?php

namespace Models;

// Class qui contient la connexion à la base de données

class Database
{

  protected function getPDO()
  {
    // try {
    $pdo = new \PDO(
      'mysql:host=ccrfrcbamo264.mysql.db:3306;dbname=ccrfrcbamo264;charset=utf8',
      'vTuTrcXPtCK4',
      '',
      [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
      ]
    );
    // } catch (\PDOException $e) {
    //   echo  $e->getMessage();
    // }
    return $pdo;
  }
}
