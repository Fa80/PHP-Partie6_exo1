<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie6_Exo1</title>
</head>
<body>
  <?php
  //Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
  //index.php?lastname=Nemare&firstname=Jean
  ?>
  <a href="index.php?lastname=Nemare&firstname=Jean">Envoi Info dans l'URL</a>
  <?php
  if (isset($_GET['lastname']) && isset($_GET['firstname'])){
    //$_GET nous permet de recuperer les paramettre d'une URL.
    //isset — Détermine si une variable est définie et est différente de NULL
    ?>
    <p><?php echo 'Le prénom et le nom de famille sont défini' . ' ' . $_GET['lastname']; ?></p>
    <?php
  } else {?>
    <p>Les paramétres prénom et nom de famille ne sont pas présent dans l'URL</p>
    <?php
  }
  ?>

</body>
</html>
