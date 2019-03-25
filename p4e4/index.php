<?php
// je crée une fonction que j'appelle compareNumber dans ses paramètres j'initialise la variable numberOne et numberTwo
function compareNumber($numberOne, $numberTwo) {
  // je crée les conditions avec mes variables
  if ($numberOne == $numberTwo) {
    $result = 'Les deux nombres sont identiques';
  } else if ($numberOne < $numberTwo) {
    $result = 'Le premier nombre est plus petit';
  } else {
    $result = 'Le premier nombre est plus grand';
  }
  //  on ne peut mettre qu'une seule fois un return car "il sort de notre fonction"
  return $result;
}?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 4 partie 4 php</title>
</head>
<body>
  <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</p>
  <ul>
    <li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</li>
    <li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</li>
    <li>Les deux nombres sont identiques si les deux nombres sont égaux</li>
  </ul>
  <!-- j'initialise mes deux variables avec des chiffres -->
  <p>Teste 1 : 12 et 120 = <?= compareNumber(12, 120); ?></p>
  <p>Teste 2 : 100 et 12 = <?= compareNumber(100, 12); ?></p>
  <p>Teste 3 : 100 et 100 = <?= compareNumber(100, 100); ?></p>

</body>
</html>
