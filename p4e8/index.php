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
    // avec = 2 ou autres : les paramètres deviennent obtionnels
function add($numberOne = 2, $numberTwo = 4, $numberThree = 8) {
  return $numberOne + $numberTwo + $numberThree;
}
    ?>
    <p>Résulat : <?= add() ?></p>
  </body>
</html>
