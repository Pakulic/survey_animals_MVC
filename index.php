<?php

require_once 'Controllers/AddUser.php';
require_once 'Controllers/Article.php';

use Controllers\AddUser;
use Controllers\Article;

// on appelle la class pour controler l'écriture des données des utilisateurs
$controlAddUser = new AddUser;
$article = new Article;

try {

  // si le paramètre "article" est passé dans l'URL
  if (isset($_GET['article'])) {
    switch ($_GET['article']) {
        // si le paramètre "article" est égale à "index"
      case "index":
        // on execute le controleur qui affiche la page "index"
        $article->index();
        break;
        // si le paramètre "article" est égale à "form" (soumission du formulaire)
      case "form":
        // on vérifier si le formulaire a bien été soumis
        if (isset($_POST['form'])) {
          // on vérifie quel bouton a été cliqué
          switch ($_POST['form']) {
              /*  dans le cas où la variable est égale à 'havePet' - l'utilisateur a un animal */
            case 'havePet':
              // on envoie vers le controlleur qui controle et enregistre les données en base de donnés
              // if ($controlAddUser->AddUserHavePet()) {
                $controlAddUser->AddUserHavePet();
                //on renvoie vers la page "merci"
                $article->thanks();
              // } else {
              //   throw new Exception('Vos données n\'ont pas pu être enregistrées. Veuillez réessayer  et contacter l\'administrateur si le problème persiste ');
              // }
              break;
              /*  dans le cas où la variable est égale à 'noHavePet' - l'utilisateur aime les animaux mais n'en possède pas */
            case 'noHavePet':
              // on envoie vers le controlleur qui controle et enregistre les données en base de donnés
              // if ($controlAddUser->AddUserNoHavePet()) {
              $controlAddUser->AddUserNoHavePet();
                //on renvoie vers la page "merci"
              $article->thanks();
              // } else {
              //   throw new Exception('Vos données n\'ont pas pu être enregistrées. Veuillez réessayer  et contacter l\'administrateur si le problème persiste ');
              // }
              exit;
              break;
              /*  dans le cas où la variable est égale à 'notLikeAnimal' - l'utilisateur n'aime pas les animaux*/
            case 'notLikeAnimal':
              // on envoie vers le controlleur qui controle et enregistre les données en base de donnés
              // if ($controlAddUser->AddUserNoLikeAnimal()) {
                $controlAddUser->AddUserNoLikeAnimal();
                //on renvoie vers la page "merci"
                $article->thanks();
              // } else {
              //   throw new Exception('Vos données n\'ont pas pu être enregistrées. Veuillez réessayer  et contacter l\'administrateur si le problème persiste ');
              // }
              exit;
              break;
              /*  dans le cas où la variable est égale à 'itdependsOn' - l'utilisateur a répondu "cela dépend*/
            case 'itdependsOn':
              // on envoie vers le controlleur qui controle et enregistre les données en base de donnés
              // if ($controlAddUser->AddUserItDependsOn()) {
                $controlAddUser->AddUserItDependsOn();
                //on renvoie vers la page "merci"
                $article->thanks();
              // } else {
              //   throw new Exception('Vos données n\'ont pas pu être enregistrées. Veuillez réessayer  et contacter l\'administrateur si le problème persiste ');
              // }
              exit;
              break;
              // on renvoie l'internaute par défaut sur la page d'accueil
            default:
              throw new Exception('Il y a eu une erreur lors de la soumission du formulaire. Veuillez réessayer  et contacter l\'administrateur si le problème persiste ');
              break;
          }
        }

        break;
      default:
        throw new Exception('cette page n\'existe pas');
    }
  }
} catch (\Exception $e) {
  die('Erreur : ' . $e->getMessage());
}
