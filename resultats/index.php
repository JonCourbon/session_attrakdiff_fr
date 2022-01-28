<?php
if(!isset($_POST["mottddeppass"]))
{
  if(isset($_GET["pb"])){
    echo 'Mauvais mot de passe'."\n";
  }
  ?>
  <form method="POST">
    <label for="mottddeppass"/>Mot de passe:<input type="text" name="mottddeppass"/>
    <input type="submit" value="S'authentifier"/>
  </form>
  <?php
  exit();
}

include('../config/configuration.php');

$mottddeppass=$_POST["mottddeppass"];
if(strcmp($mottddeppass,$motdepasse_admin) != 0 )
{
  header('Location: index.php?pb=pb');
  exit;
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>RESULTAT EVALUATION <?php echo $typeelement;?> <?php echo $nom;?> </title>
  
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
  <h1>RESULTAT EVALUATION <?php echo $typeelement;?> <strong><?php echo $nom;?></strong>  </h1>
</body>
</html>