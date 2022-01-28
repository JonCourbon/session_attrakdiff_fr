<?php 


include("script/fonctions.php");
// Questions pragmatiques
$scoresQP=array();
$somme=0;
for($i=1;$i<=7;$i++){
  $item='QP'.$i;
  $scoresQP[$item]=score($item,$_POST[$item]);
  $somme+=$scoresQP[$item];
}
$scoreQPmoy=$somme/7.;
$somme=0;
$scoresQHS=array();
for($i=1;$i<=7;$i++){
  $item='QHS'.$i;
  $scoresQHS[$item]=score($item,$_POST[$item]);
  $somme+=$scoresQHS[$item];
}
$scoreQHSmoy=$somme/7.;
$somme=0;
$scoresQHI=array();
for($i=1;$i<=7;$i++){
  $item='QHI'.$i;
  $scoresQHI[$item]=score($item,$_POST[$item]);
  $somme+=$scoresQHI[$item];
}
$scoreQHImoy=$somme/7.;
$somme=0;
$scoresATT=array();
for($i=1;$i<=7;$i++){
  $item='ATT'.$i;
  $scoresATT[$item]=score($item,$_POST[$item]);
  $somme+=$scoresATT[$item];
}
$scoresATTmoy=$somme/7.;
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
  
  <canvas id="myChart" width="400" height="400"></canvas>
  
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
  <script>
  const data = {
    labels: ['QP','QHS','QHI','ATT'],
    datasets: [{
      data: [<?php echo $scoreQPmoy;?>,<?php echo $scoreQHSmoy;?>,<?php echo $scoreQHImoy;?>,<?php echo $scoresATTmoy;?>],
      fill: false,
      borderColor: 'rgb(75, 192, 192)',
      tension: 0.1
    }]
  };
  const config = {
    type: 'line',
    data: data,
  };
  const ctx = document.getElementById('myChart');
  const myChart = new Chart(ctx,config);
  </script>
</body>
</html>