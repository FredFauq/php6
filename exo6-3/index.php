<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <body>
      <a href="http://exo6-3?startDate=2/05/2016&endDate=27/11/2016">Exercice 3</a>
      <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Vérification et affichage des paramètres de l'URL:
            <?php
            if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
              // Affichage des dates
                echo $_GET['startDate'] . ' ' . $_GET['endDate'];
            } else {
              // Affichage au visiteur
                echo 'Renseignez une date de début et de fin, svp.';
            }
            ?>
        </p>
    </body>
</html>
