<?php

namespace Models;


class Article
{

  // fonction pour afficher le contenu des pages
  public static function render($file, $params = [])
  {
    //j'extrais les données du tableau "params"
    extract($params);
    //je démarre le tampon memoire
    ob_start();
    //je charge le fichier vue
    require "Template/articles/$file.html.php";
    //je le rend dans la variable $pageContent
    $pageContent = ob_get_clean();
    //je l'affiche dans le template 'base'
    require "Template/base.html.php";
  }
}
