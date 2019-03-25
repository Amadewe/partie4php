<?php
// je crée ma fonction que j'appelle displayConcat dans les paramètres je stoke deux varaibles
function displayConcat($stringOne, $stringTwo){
  // je contatene mes deux variables avec un point
  return $stringOne . $stringTwo;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 3 partie 4 php</title>
</head>
<body>
  <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines</p>
  <!-- j'appelle ma fonction displayConcat et je n'intialise de deux chaines de caractères -->
  <p>on fait une concaténation de deux chaines de caractères : <?= displayConcat('salut ', 'toi'); ?></p>
</body>
</html>
