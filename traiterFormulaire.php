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
  
  echo 'Scores :';
  echo 'QP: '.$scoreQPmoy;
  echo 'QHS: '.$scoreQHSmoy;
  echo 'QHI: '.$scoreQHImoy;
  echo 'ATT: '.$scoresATTmoy;
  
  

 ?>