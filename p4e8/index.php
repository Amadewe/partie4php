<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8 partie 4 php</title>
  </head>
  <body>
    <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.</p>
    <p>Tous les paramètres doivent avoir une valeur par défaut.</p>
    <?php
function calcul($numberOne, $numberTwo, $numberThree) {
  return $numberOne + $numberTwo + $numberThree;
}
    ?>
    <p>Résulat : <?= calcul(2, 4, 6) ?></p>
  </body>
</html>
