<?php

namespace Models;

include_once 'Database.php';

use Models\Database;

// ECRITURE DES DONNEES UTILISATEURS

class AddPet extends Database
{

  //ajouter un animal (espèce) et son propriétaire ($idUser)
  public function addPetSpecies($species, $idUser)
  {
    // Requête de préparation des données pour lutter contre les injections sql
    $bdd = $this->getPDO()->prepare("INSERT INTO pet (species,id_user) VALUES(:species,:id_user)");
    // j'exécute la requête
    $bdd->execute(array(
      'species' => $species,
      'id_user' => $idUser,
    ));
    //je ferme la requête
    $bdd->closeCursor();
  }
}
