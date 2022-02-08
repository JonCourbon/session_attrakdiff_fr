<?php 
$path = getcwd();

$numdata=0;
$nomfichier=$path.'/data/data'.$numdata.'.txt';

while(file_exists($nomfichier)){
  $numdata++;
  $nomfichier=$path.'/data/data'.$numdata.'.txt';
}
file_put_contents($nomfichier, json_encode($_POST));
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>QUESTIONNAIRE <?php echo $typeelement;?> <?php echo $nom;?> </title>
  
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
  
  <!-- CSS Reset -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
  
  <!-- Milligram CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
  
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
  <h1>Données ajoutées</h1>
  <div class="centrer">
      <p>Nous vous remercions pour votre participation à ce questionnaire.</p>
  </div>
  

</body>
</html>
