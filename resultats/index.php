<?php
if(!isset($_POST["mottddeppass"]))
{
  if(isset($_GET["pb"])){
    echo 'Mauvais mot de passe'."\n";
  }
  ?>
  <form method="POST">
    <label for="mottddeppass"/>Mot de passe:<input type="password" name="mottddeppass"/>
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

include('../script/fonctions.php');
include('../script/fonctions_diagrammes.php');

$arrFiles = scandir(dirname(__FILE__).'/../data/');

$tabScores=array();
foreach($arrFiles as $filename){
  if(strcmp(substr($filename,0,4),'data')==0){
    $data = json_decode(file_get_contents(dirname(__FILE__).'/../data/'.$filename),TRUE);
    array_push($tabScores, calculerScores($data));
  }
}

$scores=calculerMoyennesScores($tabScores);
$moyennes=calculerScoresMoyens($scores);


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
  <h2><?php echo count($tabScores);?> répondants</h2>
  
  <div class="chart-container" style="position: relative; height:40vh; width:40vw">
    <canvas id="diagvalmoyennes" title="diagvalmoyennes"></canvas>
  </div>
  <div class="chart-container" style="position: relative; height:100vh; width:40vw">
    <canvas id="diagpairesdemots"></canvas>
  </div>
  
  <div class="chart-container" style="position: relative; height:40vh; width:40vw">
    <canvas id="diagportfolio"></canvas>
  </div>
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
  <script>
  
  <?php
  tracerDiagValMoyennes($moyennes,"diagvalmoyennes");
  tracerDiagPairesDeMots($scores,"diagpairesdemots");
  tracerDiagPortfolioResultats($moyennes,"diagportfolio");
  ?>

  </script>
  
</body>
</html>