<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
      <a href="http://exo6-4?language=PHP&server=LAMP">Exercice 4</a>
      <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Vérification et affichage des paramètres de l'URL:
            <?php
            if (isset($_GET['language']) && isset($_GET['server'])) {
              // Affichage des infos
                echo $_GET['language'] . ' ' . $_GET['server'];
            } else {
              // Affichage au visiteur
                echo 'Renseignez language et serveur, svp.';
            }
            ?>
        </p>
    </body>
</html>
