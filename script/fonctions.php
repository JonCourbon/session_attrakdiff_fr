<?php 

/**
 Retourne le score pour la question "item" et sa valeur saisie dans le formulaire $valeurform
*/
function scoreItem($item,$valeurform){
  $items_inverses=array('QP1','QP2','QP3','QP5','ATT1','ATT3','ATT5','ATT7','QHS1','QHS3','QHS4','QHS7','QHI2','QHI3','QHI6');

  $score_normal = array("-3"=>-3, "-2"=>-2, "-1"=>-1, "0"=>0,"1"=>1,"2"=>2, "3"=>3);
  $score_inverse = array("-3"=>3, "-2"=>2, "-1"=>1, "0"=>0,"1"=>-1,"2"=>-2, "3"=>-3);
  
  // par defaut, score normal
  $score=$score_normal[$valeurform];
  // s'il s'agit d'un item inverse
  if(in_array($item, $items_inverses)){ 
    $score=$score_inverse[$valeurform];
  }
  return $score;
}

function calculerScores($data){
  $scoresQP=array();
  for($i=1;$i<=7;$i++){
    $item='QP'.$i;
    $scoresQP[$item]=scoreItem($item,$data[$item]);
  }
  $scoresQHS=array();
  for($i=1;$i<=7;$i++){
    $item='QHS'.$i;
    $scoresQHS[$item]=scoreItem($item,$data[$item]);
  }
  
  $scoresQHI=array();
  for($i=1;$i<=7;$i++){
    $item='QHI'.$i;
    $scoresQHI[$item]=scoreItem($item,$data[$item]);
  }
  
  $scoresATT=array();
  for($i=1;$i<=7;$i++){
    $item='ATT'.$i;
    $scoresATT[$item]=scoreItem($item,$data[$item]);
  }
  
  $scores=array(
    'QP' => $scoresQP,
    'QHS' => $scoresQHS,
    'QHI' => $scoresQHI,
    'ATT' => $scoresATT
    
  );
  
  return $scores;
}

function calculerScoresMoyens($scores){
  $scoresmoyens=array();
  $somme=0;
  for($i=1;$i<=7;$i++){
    $item='QP'.$i;
    $somme+=$scores['QP'][$item];
  }
  $scoresmoyens['QP']=floor(100*$somme/7.)/100;

  $somme=0;
  for($i=1;$i<=7;$i++){
    $item='QHS'.$i;
    $somme+=$scores['QHS'][$item];
  }
  $scoresmoyens['QHS']=floor(100*$somme/7.)/100;
  
  $somme=0;
  for($i=1;$i<=7;$i++){
    $item='QHI'.$i;
    $somme+=$scores['QHI'][$item];
  }
  $scoresmoyens['QHI']=floor(100*$somme/7.)/100;
  
  $somme=0;
  for($i=1;$i<=7;$i++){
    $item='ATT'.$i;
    $somme+=$scores['ATT'][$item];
  }
  $scoresmoyens['ATT']=floor(100*$somme/7.)/100;
  
  
  return $scoresmoyens;
}

function calculerMoyennesScores($tabScores){
  $nbParticipants=count($tabScores);
  
  $scoresQP=array();
  for($i=1;$i<=7;$i++){
    $item='QP'.$i;
    $somme=0;
    foreach($tabScores as $score){
      $somme+=$score['QP'][$item];
    }
    $scoresQP[$item]=floor(100*$somme/$nbParticipants)/100;
  }
  $scoresQHS=array();
  for($i=1;$i<=7;$i++){
    $item='QHS'.$i;
    $somme=0;
    foreach($tabScores as $score){
      $somme+=$score['QHS'][$item];
    }
    $scoresQHS[$item]=floor(100*$somme/$nbParticipants)/100;
  }
  
  $scoresQHI=array();
  for($i=1;$i<=7;$i++){
    $item='QHI'.$i;
    $somme=0;
    foreach($tabScores as $score){
      $somme+=$score['QHI'][$item];
    }
    $scoresQHI[$item]=floor(100*$somme/$nbParticipants)/100;
  }
  
  $scoresATT=array();
  for($i=1;$i<=7;$i++){
    $item='ATT'.$i;
    $somme=0;
    foreach($tabScores as $score){
      $somme+=$score['ATT'][$item];
    }
    $scoresATT[$item]=floor(100*$somme/$nbParticipants)/100;
  }
  
  $scores=array(
    'QP' => $scoresQP,
    'QHS' => $scoresQHS,
    'QHI' => $scoresQHI,
    'ATT' => $scoresATT
    
  );
  
  return $scores;
}



 ?>