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
            if (!empty($_GET['language'])) {
                // Affichage de la variable
                echo $_GET['language'] . ' ' ;
            } else {
                // Affichage au visiteur du manque
                echo 'Il manque le parametre language, svp.';
            }
            if(!empty($_GET['server'])) {
                // Affichage de la variable
                echo $_GET['server'] ;
            } else {
                // Affichage au visiteur du manque
                echo 'Il manque le parametre serveur, svp.';
            }
            ?>
        </p>
    </body>
</html>
