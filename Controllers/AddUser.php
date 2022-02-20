<?php

namespace Controllers;

require_once 'Models/AddUser.php';
require_once 'Models/User.php';
require_once 'Models/AddPet.php';
require_once 'Models/ChampsForm.php';

use Models\ChampsForm;


class AddUser
{
  // Fonction qui contrôle et enregistre les données de l'utilisateur qui aime et a des animaux
  public function AddUserHavePet()
  {
    // je crée une clé à chaque fois que des données sont postées par un utilisateur
    $keyConf = bin2hex(random_bytes(6));
    // on nettoie les données saisies par l'utilisateur et on déclare les variables
    $likeAnimal = ChampsForm::cleanInput($_POST['likeAnimal']);
    $havePet = ChampsForm::cleanInput($_POST['haveAnimal']);
    // on enregistre les données dans la base de données
    $addUser = new \Models\AddUser;
    $addUser->addUserHavePet($likeAnimal, $havePet, $keyConf);
    // on récupère l'identifiant de l'utilisateur
    $bdduser = new \Models\User;
    $user = $bdduser->getUserbyKeyconf($keyConf);
    // on ajouter une ligne pour chaque espèce et l'utilisateur associé (id_user)
    if (isset($_POST['species'])) {
      $count = count($_POST['species']);
      for ($i = 0; $i < $count; $i++) {
        if ($_POST['species'][$i] != '') {
          $species = ChampsForm::cleanInput($_POST['species'][$i]);
          $addPet = new \Models\AddPet;
          $addPet->addPetSpecies($species, $user['id_user']);
        }
      }
    }
  }
  // Fonction qui contrôle et enregistre les données de l'utilisateur qui aime les animaux mais n'en a pas
  public function AddUserNoHavePet()
  {
    if (isset($_POST['haveAnimal']) && $_POST['haveAnimal'] == "no") {
      // on nettoie les données saisies par l'utilisateur et on déclare les variables
      $likeAnimal = ChampsForm::cleanInput($_POST['likeAnimal']);
      $havePet = ChampsForm::cleanInput($_POST['haveAnimal']);
      // on enregistre les données dans la base de données
      $addUser = new \Models\AddUser;
      $addUser->addUserHaveNoPet($likeAnimal, $havePet);
      // on renvoie vers la page "merci"
    }
  }

  // Fonction qui contrôle et enregistre les données de l'utilisateur qui n'aime pas les animaux

  public function AddUserNoLikeAnimal()
  {
    // on nettoie les données saisies par l'utilisateur et on déclare les variables
    $likeAnimal = ChampsForm::cleanInput($_POST['likeAnimal']);
    //on nerifie si les checkbox sont activés ou non
    if (isset($_POST['noice'])) {
      $noice = 1;
    } else {
      $noice = 0;
    }
    if (isset($_POST['clean'])) {
      $clean = 1;
    } else {
      $clean = 0;
    }
    if (isset($_POST['cost'])) {
      $cost = 1;
    } else {
      $cost = 0;
    }
    if (isset($_POST['religion'])) {
      $religion = 1;
    } else {
      $religion = 0;
    }
    // on nettoie les données saisies dans le champ "autres"
    $other = ChampsForm::cleanInput($_POST['other']);
    // on enregistre les données dans la base de données
    $addUser = new \Models\AddUser;
    $addUser->addUserNotLike($likeAnimal, $noice, $clean, $cost, $religion, $other);
  }

  // Fonction qui contrôle et enregistre les données de l'utilisateur qui a répondu "cela dépend"

  public function AddUserItDependsOn()
  {
    // on nettoie les données saisies par l'utilisateur et on déclare les variables
    $likeAnimal = ChampsForm::cleanInput($_POST['likeAnimal']);
    // on nerifie si les checkbox sont activés ou non
    if (isset($_POST['accordingToSize'])) {
      $accordingtoSize = 1;
    } else {
      $accordingtoSize = 0;
    }
    if (isset($_POST['accordingToEducation'])) {
      $accordingtoEducation = 1;
    } else {
      $accordingtoEducation = 0;
    }
    if (isset($_POST['accordingToCost'])) {
      $accordingtoCost = 1;
    } else {
      $accordingtoCost = 0;
    }
    // on nettoie les données saisies dans le champ "autres"
    $accordingtoOther = ChampsForm::cleanInput($_POST['accordingToOther']);
    // on enregistre les données dans la base de données
    $addUser = new \Models\AddUser;
    $addUser->addUseritDependsOn($likeAnimal, $accordingtoSize, $accordingtoEducation, $accordingtoCost, $accordingtoOther);
  }
}
