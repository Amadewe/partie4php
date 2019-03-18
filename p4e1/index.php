<?php
// Pour créer une fonction, on utilise l'instruction «function» 
// suivi du nom que l'on souhaite donner à cette fonction, suivi de 2 parenthèses qui sont les paramètres de notre fonction
function bool(){
  // Les instructions à éxécuter lors de l'appel de cette fonction seront placée entre deux accolades.
  // Une fonction peut renvoyer une valeur. Pour cela, nous utilisons l'instruction «return», suivi de la variable à retourner.
  return true;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 1 partie 4 php</title>
</head>
<body>
  <p>Faire une fonction qui retourne true.</p>
  <p>On crée une fonction avec un type booléens qui affiche true : <?= bool(); ?></p>
</body>
</html>
