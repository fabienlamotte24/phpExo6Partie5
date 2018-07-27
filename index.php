<?php
/*Création du tableau associatif*/
  $departements = array(
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
<p>
<?php
//Recherche valeur de la clé 59
  echo $departements[59];
?>
</p>
  </body>
</html>
