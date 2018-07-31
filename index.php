<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 9/5</title>
  </head>
  <body>
    <p>
      <?php
// Création du tableau $region
        $region = array (
          '02' => 'Aisne',
          // Se lit : Index 02 associé à Aisne.
          '59' => 'Nord',
          '60' => 'Oise',
          '62' => 'Pas-de-Calais',
          '80' => 'Somme');
        // Afficher le tableau à l'aide d'une boucle foreach (plus adaptée aux tableaux associatifs)
        foreach ($region as $element) {
          echo $element . ' ';
        }
      ?>
    </p>
  </body>
</html>
