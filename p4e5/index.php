<?php
function concat($string, $number){
  return $string . $number;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 5 partie 4 php</title>
</head>
<body>
  <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>
  <p>la concaténation d'une chaine de caractères et d'un nombre : <?= concat('nombre ', 12) ?></p>
</body>
</html>
