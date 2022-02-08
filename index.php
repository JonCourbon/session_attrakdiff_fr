<?php
include('config/configuration.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>QUESTIONNAIRE <?php echo $typeelement;?> <?php echo $nom;?> </title>
  
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
  <h1>Présentation du contexte</h1>
  <p>Dans le cadre d'un projet sur l'expérience utilisateur, nous souhaiterions évaluer vos impressions sur le 
   <?php echo $typeelement;?> <strong><?php echo $nom;?></strong>. Ce questionnaire se présente sous forme de paires de mots pour vous assister dans l'évaluation du système. Chaque paire représente des contrastes. Les échelons entre les deux extrémités vous permettent de décrire l'intensité de la qualité choisie. </p>
  <p>Ne pensez aux paires de mots et essayez simplement de donner une réponse spontanée. Vous pourrez avoir l'impression que certains termes ne décrivent pas correctement le système. Dans ce cas, assurez-­vous de donner tout de même une réponse. Gardez à l'esprit qu'il n'y a pas de bonne ou mauvaise réponse. Seule votre opinion compte ! </p>
  
  <div class="centrer">
      <a href="questionnaire.php"><button>COMMENCER</button></a>
  </div>
  

</body>
</html>


