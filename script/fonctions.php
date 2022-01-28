<?php 

/**
 Retourne le score pour la question "item" et sa valeur saisie dans le formulaire $valeurform
*/
function score($item,$valeurform){
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



 ?>