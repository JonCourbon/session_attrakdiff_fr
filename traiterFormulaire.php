<?php 
$path = getcwd();

$numdata=0;
$nomfichier=$path.'/data/data'.$numdata.'.txt';

while(file_exists($nomfichier)){
  $numdata++;
  $nomfichier=$path.'/data/data'.$numdata.'.txt';
}
file_put_contents($nomfichier, json_encode($_POST));
$data = json_decode(file_get_contents($nomfichier),TRUE);



include("script/fonctions.php");
include("script/fonctions_diagrammes.php");

$scoresParticipant1=calculerScores($data);
$tabScores[0]=$scoresParticipant1;
$scores=calculerMoyennesScores($tabScores);


$moyennes=calculerScoresMoyens($scores);

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
  
  <div class="chart-container" style="position: relative; height:40vh; width:40vw">
    <canvas id="diagvalmoyennes"></canvas>
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