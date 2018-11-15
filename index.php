<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>

 <?php
 $votreage = 18;
 //settype definir le type de variable
  settype($votreage, "integer");
 if ($votreage < 18)
{
   echo "Vous êtes mineur";
}
// sinon si votre age est superieur ou egal a 18 alors vous etes majeur
else if ($votreage >= 18)
{
   echo "Vous êtes majeur";
}
// sinon vous n'avez pas du rentré votre age car la variable ne contient pas de nombre
else {
   echo "Erreur : vous n'avez pas rentré votre âge";
}

?>
</body>
</html>
