<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6</title>
    </head>
    <body>
      <a href="http://exo6-6?building=12&room=101">Exercice 6</a>
      <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Vérification et affichage des paramètres de l'URL:
            <?php
            if (isset($_GET['building']) & isset($_GET['room'])) {
              // Affichage des infos
                echo 'Bâtiment : ' . $_GET['building'] . ' Chambre : ' . $_GET['room'];
            } else {
              // Affichage au visiteur
                echo ' Bâtiment et chambre, svp?';
            }
            ?>
        </p>
    </body>
</html>
