<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body>
      <a href="http://exo6-5?week=12">Exercice 5</a>
      <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Vérification et affichage des paramètres de l'URL:
            <?php
            if (isset($_GET['week'])) {
              // Affichage de la semaine
                echo $_GET['week'];
            } else {
              // Affichage au visiteur
                echo ' Quelle semaine, svp?';
            }
            ?>
        </p>
    </body>
</html>
