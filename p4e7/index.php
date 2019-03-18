<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7 partie 4 php</title>
</head>
<body>
  <p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :</p>
  <ul>
    <li>Homme</li>
    <li>Femme</li>
  </ul>
  <p>La fonction doit renvoyer en fonction des paramètres :</p>
  <ul>
    <li>Vous êtes un homme et vous êtes majeur</li>
    <li>Vous êtes un homme et vous êtes mineur</li>
    <li>Vous êtes une femme et vous êtes majeur</li>
    <li>Vous êtes une femme et vous êtes mineur</li>
  </ul>
  <p>Gérer tous les cas.</p>
  <?php
  function display($gender, $age){
    if ($gender == 'homme' && $age > 18){
      echo 'Vous êtes un homme et vous êtes majeur';
    } else if ($gender == 'homme' && $age <= 18){
      echo 'Vous êtes un homme et vous êtes mineur';
    } else if ($gender == 'femme' && $age > 18){
      echo 'Vous êtes une femme et vous êtes majeur';
    } else if ($gender == 'homme' && $age <= 18){
      echo 'Vous êtes une femme et vous êtes mineur';
    } else{
      echo 'Merci de rentrer un genre ou un âge correct';
    }
  }
  ?>
  <p>reponse : <?= display('homme', 2)?></p>
</body>
</html>
