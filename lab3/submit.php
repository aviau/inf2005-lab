<!DOCTYPE html>
<html>
  <head>
    <title>Confirmation d'application</title>
    <meta charset="utf8">
  </head>
  <body>
  <h1>HEY BONJOUR LA</h1>
  <?php
    if ( !isset($_POST["nom"]) || !isset($_POST["prenom"]) || !isset($_POST["age"]) ) {
      echo "<p>Le gros, y manque soit non, prenom, ou bedon lage.</p>";
  } else if (strlen($_POST["nom"]) == 0) {
      echo "<p>TON NOM EST VRAIMENT PETIT LA.</p>";
    } else {
      $nom = $_POST["nom"];
      $prenom = $_POST["prenom"];
      $age = $_POST["age"];
      echo "<p>TU TAPELLE {$nom}, TON PRENOM CEST {$prenom} PIS TON AGE EST {$age}. On confirme ton inscription.</p>";
      echo "<h1>TOUTE EST BIN BEAU</h1>";
    } ?>
  </body>
</html>
