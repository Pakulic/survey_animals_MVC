<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $pageDescription ?>">
  <!-- Lien vers feuille CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Lien pour ajouter les polices  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!--lien ppur ajouter les icones-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/8a151f58ff.js" crossorigin="anonymous"></script>

  <!-- ajout du framework VueJs  -->
  <script src="https://unpkg.com/vue@next"></script>
  <!-- Titre-->
  <title><?= $pageTitle ?></title>

</head>

<body>
  <!-- HEADER -->
  <header class="header">
    <a href="accueil"><i id=iconPet class='fas fa-paw'></i></a>
    <div>
      <h1>Sondage à propos des animaux domestiques</h1>
      <h2>Dites-nous si vous aimez ou non les animaux et pour quelle(s) raison(s)</h2>
    </div>
  </header>

  <!-- SECTION PRINCIPALE -->

  <main class="main">

    <?= $pageContent ?>

  </main>


  <!-- FOOTER -->

  <footer class="footer">
    <p>réalisé par Christelle Pakulic</p>
  </footer>

  <script src="js/vue.js"></script>
  <script src="js/addSpecies.js"></script>


</body>

</html>