<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>
      <a href="http://exo6-2?lastName=Nemare&firstName=Jean">Exercice 2</a>
      <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Vérification et affichage des paramètres de l'URL:
            <?php
            if (isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['age'])) {
              // Affichage du nom et prénom
                echo $_GET['firstName'] . ' ' . $_GET['lastName'] . ' ' . $_GET['age'];
            } else {
              // Manque des paramètres, on signale au visiteur
                echo 'il manque des parametres !';
            }
            ?>
        </p>
    </body>
</html>
