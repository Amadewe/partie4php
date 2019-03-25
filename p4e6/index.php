<?php
function display($lastName, $firstName, $age) {
  return $lastName . $firstName .'tu as '. $age;
}?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 6 partie 4 php</title>
</head>
<body>
  <p>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne.</p>
  <p>Elle doit renvoyer une chaine de la forme :</p>
  <p>"Bonjour" + nom + prénom + ",tu as" + age + "ans".</p>
  <p>Bonjour <?= display('Dupont ', 'Jean ', 18)?> ans</p>
</body>
</html>
