<?php
// Pour créer une fonction, on utilise l'instruction «function»
// suivi du nom que l'on souhaite donner à cette fonction, suivi de 2 parenthèses qui sont les paramètres de notre fonction
function display($string){
return $string;
}

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 2 partie 4 php</title>
</head>
<body>
  <p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
  <!-- Les chaînes de caractères (string) sont le nom informatique qu'on donne au texte. Tout texte est appelé chaîne de caractères.
  En PHP, ce type de données a un nom :string. On peut stocker des textes courts comme très longs au besoin. -->
  <p>Message :  <?= display('salut'); ?></p>
</body>
</html>
