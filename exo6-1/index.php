<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1</title>
    </head>
    <body>
      <a href="http://exo6-1?lastName=Nemare&firstName=Jean">Exercice 1</a>
      <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Vérification et affichage des paramètres de l'URL:
            <?php
            if (isset($_GET['firstName']) && isset($_GET['lastName'])) {
              // Affichage du nom et prénom
                echo $_GET['firstName'] . ' ' . $_GET['lastName'];
            } else {
              // Manque des paramètres, on signale au visiteur
                echo 'Veuillez renseigner un nom et un prénom !';
            }
            ?>
        </p>
    </body>
</html>
