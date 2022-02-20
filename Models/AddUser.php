<?php

namespace Models;

include_once 'Database.php';

use Models\Database;

// ECRITURE DES DONNEES UTILISATEURS

class AddUser extends Database
{

  //ajouter un utilisateur qui aime et a des animaux
  public function addUserHavePet($likeAnimal, $havePet, $keyConf)
  {
    // Requête de préparation des données pour lutter contre les injections sql
    $bdd = $this->getPDO()->prepare("INSERT INTO user (like_animal,have_pet,key_conf) VALUES(:like_animal,:have_pet,:key_conf)");
    // j'exécute la requête
    $bdd->execute(array(
      'like_animal' => $likeAnimal,
      'have_pet' => $havePet,
      'key_conf' => $keyConf
    ));
    //je ferme la requête
    $bdd->closeCursor();
  }
  //ajouter un utilisateur qui aime les animaux mais n'en possède pas
  public function addUserHaveNoPet($likeAnimal, $havePet)
  {
    // Requête de préparation des données pour lutter contre les injections sql
    $bdd = $this->getPDO()->prepare("INSERT INTO user (like_animal,have_pet) VALUES(:like_animal,:have_pet)");
    // j'exécute la requête
    $bdd->execute(array(
      'like_animal' => $likeAnimal,
      'have_pet' => $havePet,
    ));
    //je ferme la requête
    $bdd->closeCursor();
  }
  //ajouter un utilisateur qui n'aime pas les animaux
  public function addUserNotLike($likeAnimal, $noice, $clean, $cost, $religion, $other)
  {
    // Requête de préparation des données pour lutter contre les injections sql
    $bdd = $this->getPDO()->prepare("INSERT INTO user (like_animal,noice,clean,cost,religion,other) VALUES(:like_animal,:noice,:clean,:cost,:religion,:other)");
    // j'exécute la requête
    $bdd->execute(array(
      'like_animal' => $likeAnimal,
      'noice' => $noice,
      'clean' => $clean,
      'cost' => $cost,
      'religion' => $religion,
      'other' => $other,
    ));
    //je ferme la requête
    $bdd->closeCursor();
  }
  //ajouter un utilisateur qui a répondu "cela dépend"
  public function addUseritDependsOn($likeAnimal, $accordingtoSize, $accordingtoEducation, $accordingtoCost, $accordingtoOther)
  {
    // Requête de préparation des données
    $bdd = $this->getPDO()->prepare("INSERT INTO user (like_animal,accordingto_size, accordingto_education,accordingto_cost,accordingto_other) VALUES(:like_animal,:accordingto_size,:accordingto_education,:accordingto_cost, :accordingto_other )");
    // j'exécute la requête
    $bdd->execute(array(
      'like_animal' => $likeAnimal,
      'accordingto_size' => $accordingtoSize,
      'accordingto_education' => $accordingtoEducation,
      'accordingto_cost' => $accordingtoCost,
      'accordingto_other' => $accordingtoOther,
    ));
    //je ferme la requête
    $bdd->closeCursor();
  }
}
