<?php
$numberOne = 5;
$numberTwo = 18;
?>
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
<?php
$compare = ($numberOne $numberTwo) {
  if ($numberOne < $numberTwo) { ?>
    <p>Le premier nombre est plus grand</p>
<?php } else if ($numberOne > $numberTwo) { ?>
  <p>Le premier nombre est plus petit</p>
<?php } else if ($numberOne == $numberTwo){ ?>
  <p>Les deux nombres sont identiques </p>
<?php }?>
<?php }?>
<p><?= $calcul ?></p>
  </body>
</html>
