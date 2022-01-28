<?php
include('config/configuration.php');
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
  
  <form id="regForm" action="traiterFormulaire.php" method="GET">
    <div class="tab">
      <h2>Items 1/3</h2>
      <table>
        <tbody>
          <tr>
            <td>Humain</td>
            <td><input type="radio" name="QP1" value="-3" checked/></td>
            <td><input type="radio" name="QP1" value="-2"/></td>
            <td><input type="radio" name="QP1" value="-1"/></td>
            <td><input type="radio" name="QP1" value="0"/></td>
            <td><input type="radio" name="QP1" value="1"/></td>
            <td><input type="radio" name="QP1" value="2"/></td>
            <td><input type="radio" name="QP1" value="3"/></td>
            <td>Technique</td>
          </tr>
          <tr>
            <td>M'isole</td>
            <td><input type="radio" name="QHI1" value="-3"/></td>
            <td><input type="radio" name="QHI1" value="-2"/></td>
            <td><input type="radio" name="QHI1" value="-1" checked/></td>
            <td><input type="radio" name="QHI1" value="0"/></td>
            <td><input type="radio" name="QHI1" value="1"/></td>
            <td><input type="radio" name="QHI1" value="2"/></td>
            <td><input type="radio" name="QHI1" value="3"/></td>
            <td>Me sociabilise</td>
          </tr>
          <tr>
            <td>Plaisant</td>
            <td><input type="radio" name="ATT1" value="-3"/></td>
            <td><input type="radio" name="ATT1" value="-2" checked/></td>
            <td><input type="radio" name="ATT1" value="-1"/></td>
            <td><input type="radio" name="ATT1" value="0"/></td>
            <td><input type="radio" name="ATT1" value="1"/></td>
            <td><input type="radio" name="ATT1" value="2"/></td>
            <td><input type="radio" name="ATT1" value="3"/></td>
            <td>Déplaisant</td>
          </tr>
          <tr>
            <td>Original</td>
            <td><input type="radio" name="QHS1" value="-3"/></td>
            <td><input type="radio" name="QHS1" value="-2"/></td>
            <td><input type="radio" name="QHS1" value="-1"/></td>
            <td><input type="radio" name="QHS1" value="0"/></td>
            <td><input type="radio" name="QHS1" value="1" checked/></td>
            <td><input type="radio" name="QHS1" value="2"/></td>
            <td><input type="radio" name="QHS1" value="3"/></td>
            <td>Conventionnel</td>
          </tr>
          <tr>
            <td>Simple</td>
            <td><input type="radio" name="QP2" value="-3"/></td>
            <td><input type="radio" name="QP2" value="-2"/></td>
            <td><input type="radio" name="QP2" value="-1"/></td>
            <td><input type="radio" name="QP2" value="0" checked/></td>
            <td><input type="radio" name="QP2" value="1"/></td>
            <td><input type="radio" name="QP2" value="2"/></td>
            <td><input type="radio" name="QP2" value="3"/></td>
            <td>Compliqué</td>
          </tr>
          <tr>
            <td>Professionnel</td>
            <td><input type="radio" name="QHI2" value="-3"/></td>
            <td><input type="radio" name="QHI2" value="-2"/></td>
            <td><input type="radio" name="QHI2" value="-1"/></td>
            <td><input type="radio" name="QHI2" value="0"/></td>
            <td><input type="radio" name="QHI2" value="1" checked/></td>
            <td><input type="radio" name="QHI2" value="2"/></td>
            <td><input type="radio" name="QHI2" value="3"/></td>
            <td>Amateur</td>
          </tr>
          <tr>
            <td>Laid</td>
            <td><input type="radio" name="ATT2" value="-3"/></td>
            <td><input type="radio" name="ATT2" value="-2"/></td>
            <td><input type="radio" name="ATT2" value="-1"/></td>
            <td><input type="radio" name="ATT2" value="0"/></td>
            <td><input type="radio" name="ATT2" value="1" checked/></td>
            <td><input type="radio" name="ATT2" value="2"/></td>
            <td><input type="radio" name="ATT2" value="3"/></td>
            <td>Beau</td>
          </tr>
          <tr>
            <td>Pratique</td>
            <td><input type="radio" name="QP3" value="-3"/></td>
            <td><input type="radio" name="QP3" value="-2"/></td>
            <td><input type="radio" name="QP3" value="-1"/></td>
            <td><input type="radio" name="QP3" value="0"/></td>
            <td><input type="radio" name="QP3" value="1"/></td>
            <td><input type="radio" name="QP3" value="2"/></td>
            <td><input type="radio" name="QP3" value="3" checked/></td>
            <td>Pas pratique</td>
          </tr>
          <tr>
            <td>Agréable</td>
            <td><input type="radio" name="ATT3" value="-3"/></td>
            <td><input type="radio" name="ATT3" value="-2"/></td>
            <td><input type="radio" name="ATT3" value="-1"/></td>
            <td><input type="radio" name="ATT3" value="0"/></td>
            <td><input type="radio" name="ATT3" value="1"/></td>
            <td><input type="radio" name="ATT3" value="2"/></td>
            <td><input type="radio" name="ATT3" value="3" checked/></td>
            <td>Désagréable</td>
          </tr>
          <tr>
            <td>Fastidieux</td>
            <td><input type="radio" name="QP4" value="-3"/></td>
            <td><input type="radio" name="QP4" value="-2"/></td>
            <td><input type="radio" name="QP4" value="-1"/></td>
            <td><input type="radio" name="QP4" value="0"/></td>
            <td><input type="radio" name="QP4" value="1" checked/></td>
            <td><input type="radio" name="QP4" value="2"/></td>
            <td><input type="radio" name="QP4" value="3"/></td>
            <td>Efficace</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab">
      <h2>Items 2/3</h2>
      <table>
        <tbody>
          <tr>
            <td>De bon goût</td>
            <td><input type="radio" name="QHI3" value="-3" checked/></td>
            <td><input type="radio" name="QHI3" value="-2"/></td>
            <td><input type="radio" name="QHI3" value="-1"/></td>
            <td><input type="radio" name="QHI3" value="0"/></td>
            <td><input type="radio" name="QHI3" value="1"/></td>
            <td><input type="radio" name="QHI3" value="2"/></td>
            <td><input type="radio" name="QHI3" value="3"/></td>
            <td>De mauvais goût</td>
          </tr>
          <tr>
            <td>Prévisible</td>
            <td><input type="radio" name="QP5" value="-3"/></td>
            <td><input type="radio" name="QP5" value="-2"/></td>
            <td><input type="radio" name="QP5" value="-1"/></td>
            <td><input type="radio" name="QP5" value="0"/></td>
            <td><input type="radio" name="QP5" value="1"/></td>
            <td><input type="radio" name="QP5" value="2" checked/></td>
            <td><input type="radio" name="QP5" value="3"/></td>
            <td>Imprévisible</td>
          </tr>
          <tr>
            <td>Bas de gamme</td>
            <td><input type="radio" name="QHI4" value="-3"/></td>
            <td><input type="radio" name="QHI4" value="-2"/></td>
            <td><input type="radio" name="QHI4" value="-1"/></td>
            <td><input type="radio" name="QHI4" value="0" checked/></td>
            <td><input type="radio" name="QHI4" value="1"/></td>
            <td><input type="radio" name="QHI4" value="2"/></td>
            <td><input type="radio" name="QHI4" value="3"/></td>
            <td>Haut de gamme</td>
          </tr>
          <tr>
            <td>M'exclut</td>
            <td><input type="radio" name="QHI5" value="-3"/></td>
            <td><input type="radio" name="QHI5" value="-2"/></td>
            <td><input type="radio" name="QHI5" value="-1"/></td>
            <td><input type="radio" name="QHI5" value="0" checked/></td>
            <td><input type="radio" name="QHI5" value="1"/></td>
            <td><input type="radio" name="QHI5" value="2"/></td>
            <td><input type="radio" name="QHI5" value="3"/></td>
            <td>M'intègre</td>
          </tr>
          <tr>
            <td>Me rapproche des autres</td>
            <td><input type="radio" name="QHI6" value="-3"/></td>
            <td><input type="radio" name="QHI6" value="-2"/></td>
            <td><input type="radio" name="QHI6" value="-1"/></td>
            <td><input type="radio" name="QHI6" value="0"/></td>
            <td><input type="radio" name="QHI6" value="1"/></td>
            <td><input type="radio" name="QHI6" value="2" checked/></td>
            <td><input type="radio" name="QHI6" value="3"/></td>
            <td>Me sépare des autres</td>
          </tr>
          <tr>
            <td>Non présentable</td>
            <td><input type="radio" name="QHI7" value="-3"/></td>
            <td><input type="radio" name="QHI7" value="-2"/></td>
            <td><input type="radio" name="QHI7" value="-1"/></td>
            <td><input type="radio" name="QHI7" value="0" checked/></td>
            <td><input type="radio" name="QHI7" value="1"/></td>
            <td><input type="radio" name="QHI7" value="2"/></td>
            <td><input type="radio" name="QHI7" value="3"/></td>
            <td>Présentable</td>
          </tr>
          <tr>
            <td>Rebutant</td>
            <td><input type="radio" name="ATT4" value="-3"/></td>
            <td><input type="radio" name="ATT4" value="-2"/></td>
            <td><input type="radio" name="ATT4" value="-1" checked/></td>
            <td><input type="radio" name="ATT4" value="0"/></td>
            <td><input type="radio" name="ATT4" value="1"/></td>
            <td><input type="radio" name="ATT4" value="2"/></td>
            <td><input type="radio" name="ATT4" value="3"/></td>
            <td>Attirant</td>
          </tr>
          <tr>
            <td>Sans imagination</td>
            <td><input type="radio" name="QHS2" value="-3"/></td>
            <td><input type="radio" name="QHS2" value="-2"/></td>
            <td><input type="radio" name="QHS2" value="-1" checked/></td>
            <td><input type="radio" name="QHS2" value="0"/></td>
            <td><input type="radio" name="QHS2" value="1"/></td>
            <td><input type="radio" name="QHS2" value="2"/></td>
            <td><input type="radio" name="QHS2" value="3"/></td>
            <td>Créatif</td>
          </tr>
          <tr>
            <td>Bon</td>
            <td><input type="radio" name="ATT5" value="-3"/></td>
            <td><input type="radio" name="ATT5" value="-2" checked/></td>
            <td><input type="radio" name="ATT5" value="-1"/></td>
            <td><input type="radio" name="ATT5" value="0"/></td>
            <td><input type="radio" name="ATT5" value="1"/></td>
            <td><input type="radio" name="ATT5" value="2"/></td>
            <td><input type="radio" name="ATT5" value="3"/></td>
            <td>Mauvais</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab">
      <h2>Items 3/3</h2>
      <table>
        <tbody>
          <tr>
            <td>Confus</td>
            <td><input type="radio" name="QP6" value="-3"/></td>
            <td><input type="radio" name="QP6" value="-2" checked/></td>
            <td><input type="radio" name="QP6" value="-1"/></td>
            <td><input type="radio" name="QP6" value="0"/></td>
            <td><input type="radio" name="QP6" value="1"/></td>
            <td><input type="radio" name="QP6" value="2"/></td>
            <td><input type="radio" name="QP6" value="3"/></td>
            <td>Clair</td>
          </tr>
          <tr>
            <td>Repoussant</td>
            <td><input type="radio" name="ATT6" value="-3"/></td>
            <td><input type="radio" name="ATT6" value="-2" checked/></td>
            <td><input type="radio" name="ATT6" value="-1"/></td>
            <td><input type="radio" name="ATT6" value="0"/></td>
            <td><input type="radio" name="ATT6" value="1"/></td>
            <td><input type="radio" name="ATT6" value="2"/></td>
            <td><input type="radio" name="ATT6" value="3"/></td>
            <td>Attrayant</td>
          </tr>
          <tr>
            <td>Audacieux</td>
            <td><input type="radio" name="QHS3" value="-3"/></td>
            <td><input type="radio" name="QHS3" value="-2"/></td>
            <td><input type="radio" name="QHS3" value="-1" checked/></td>
            <td><input type="radio" name="QHS3" value="0"/></td>
            <td><input type="radio" name="QHS3" value="1"/></td>
            <td><input type="radio" name="QHS3" value="2"/></td>
            <td><input type="radio" name="QHS3" value="3"/></td>
            <td>Prudent</td>
          </tr>
          <tr>
            <td>Novateur</td>
            <td><input type="radio" name="QHS4" value="-3"/></td>
            <td><input type="radio" name="QHS4" value="-2"/></td>
            <td><input type="radio" name="QHS4" value="-1"/></td>
            <td><input type="radio" name="QHS4" value="0"/></td>
            <td><input type="radio" name="QHS4" value="1"/></td>
            <td><input type="radio" name="QHS4" value="2" checked/></td>
            <td><input type="radio" name="QHS4" value="3"/></td>
            <td>Conservateur</td>
          </tr>
          <tr>
            <td>Ennuyeux</td>
            <td><input type="radio" name="QHS5" value="-3"/></td>
            <td><input type="radio" name="QHS5" value="-2"/></td>
            <td><input type="radio" name="QHS5" value="-1"/></td>
            <td><input type="radio" name="QHS5" value="0" checked/></td>
            <td><input type="radio" name="QHS5" value="1"/></td>
            <td><input type="radio" name="QHS5" value="2"/></td>
            <td><input type="radio" name="QHS5" value="3"/></td>
            <td>Captivant</td>
          </tr>
          <tr>
            <td>Peu exigeant</td>
            <td><input type="radio" name="QHS6" value="-3"/></td>
            <td><input type="radio" name="QHS6" value="-2" checked/></td>
            <td><input type="radio" name="QHS6" value="-1"/></td>
            <td><input type="radio" name="QHS6" value="0"/></td>
            <td><input type="radio" name="QHS6" value="1"/></td>
            <td><input type="radio" name="QHS6" value="2"/></td>
            <td><input type="radio" name="QHS6" value="3"/></td>
            <td>Challenging</td>
          </tr>
          <tr>
            <td>Motivant</td>
            <td><input type="radio" name="ATT7" value="-3"/></td>
            <td><input type="radio" name="ATT7" value="-2"/></td>
            <td><input type="radio" name="ATT7" value="-1" checked/></td>
            <td><input type="radio" name="ATT7" value="0"/></td>
            <td><input type="radio" name="ATT7" value="1"/></td>
            <td><input type="radio" name="ATT7" value="2"/></td>
            <td><input type="radio" name="ATT7" value="3"/></td>
            <td>Décourageant</td>
          </tr>
          <tr>
            <td>Nouveau</td>
            <td><input type="radio" name="QHS7" value="-3"/></td>
            <td><input type="radio" name="QHS7" value="-2"/></td>
            <td><input type="radio" name="QHS7" value="-1"/></td>
            <td><input type="radio" name="QHS7" value="0"/></td>
            <td><input type="radio" name="QHS7" value="1"/></td>
            <td><input type="radio" name="QHS7" value="2" checked/></td>
            <td><input type="radio" name="QHS7" value="3"/></td>
            <td>Commun</td>
          </tr>
          <tr>
            <td>Incontrôlable</td>
            <td><input type="radio" name="QP7" value="-3"/></td>
            <td><input type="radio" name="QP7" value="-2"/></td>
            <td><input type="radio" name="QP7" value="-1"/></td>
            <td><input type="radio" name="QP7" value="0"/></td>
            <td><input type="radio" name="QP7" value="1" checked/></td>
            <td><input type="radio" name="QP7" value="2"/></td>
            <td><input type="radio" name="QP7" value="3"/></td>
            <td>Maîtrisable</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="overflow:auto;">
      <div style="float:right;">
        <a class="button" id="nextBtn" onclick="nextPrev(1)">Suivant</a>
      </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>
  </form>
  
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  
  
</body>
</html>