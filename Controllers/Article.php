<?php

namespace Controllers;

require_once 'Models/Article.php';

class Article
{
  public function index()
  {
    // titre et méta-description de la page
    $pageTitle = 'Sondage pour connaître votre amour pour les animaux';
    $pageDescription = 'Donnez votre avis en répondant à ce sondage concernant les animaux domestiques. Dites-nous si vous aimez les animaux (chat, chien..) et pour quelles raisons';

    // on appelle la class pour afficher les articles
    $article = new \Models\Article;
    // on affiche l'article "index" (page d'accueil)
    $article->render('index', [
      'pageTitle' => $pageTitle,
      'pageDescription' => $pageDescription,
    ]);
  }
  public function thanks()
  {
    // titre et méta-description de la page
    $pageTitle = 'Validation du sondage pour connaître votre amour pour les animaux';
    $pageDescription = 'Merci d\'avoir répondu au sondage à propos des animaux domestiques. Il nous permet de savoir si vous aimez ou non les animaux et pour quelles raisons. Merci d\'avoir donné votre avis.';

    // on appelle la class pour afficher les articles
    $article = new \Models\Article;
    // on affiche l'article "merci"
    $article->render('merci', [
      'pageTitle' => $pageTitle,
      'pageDescription' => $pageDescription
    ]);
  }
}
