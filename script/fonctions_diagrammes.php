<?php 

function tracerDiagValMoyennes($moyennes,$idcanvas){
  echo ("
  const data_diagvalmoyennes = {
    labels: ['QP','QHS','QHI','ATT'],
    datasets: [{
      data: [".$moyennes['QP'].",".$moyennes['QHS'].",".$moyennes['QHI'].",".$moyennes['ATT']."],
      fill: false,
      borderColor: 'rgb(75, 192, 192)',
      padding: 1
    }]
  };
  const config_diagvalmoyennes = {
    type: 'line',
    data: data_diagvalmoyennes,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
        title: {
          display: true,
          text: 'Diagramme des valeurs moyennes'
        }
      },
      scales : {
        y : {
          min: -3,
          max: 3,
        }
      }
    },
  };
  const ctx_diagvalmoyennes = document.getElementById('".$idcanvas."');
  const myChart_diagvalmoyennes = new Chart(ctx_diagvalmoyennes,config_diagvalmoyennes);
  ");
}


function tracerDiagPairesDeMots($scores,$idcanvas){
  echo ("
  const data_diagpairesdemots = {
    labels: ['Technique-Humain','Compliqué-Simple','Pas pratique-pratique','Fastidieux - Efficace','Imprévisible-prévisible','Confus - Clair','Incontrôlable - contrôlable'],
    datasets: [{
      data: [".$scores['QP']['QP1'].",".$scores['QP']['QP2'].",".$scores['QP']['QP3'].",".$scores['QP']['QP4'].",".$scores['QP']['QP5'].",".$scores['QP']['QP6'].",".$scores['QP']['QP7']."],
      fill: false,
      borderColor: 'rgb(75, 192, 192)',
      padding: 1
    }]
  };
  
  const config_diagpairesdemots = {
    type: 'line',
    data: data_diagpairesdemots,
    options: {
      indexAxis: 'y',
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
        title: {
          display: true,
          text: 'Diagramme des paires de mots'
        }
      },
      scales : {
        x : {
          min: -3,
          max: 3,
        }
      }
    },
  };
  
  
  
  const ctx_diagpairesdemots = document.getElementById('".$idcanvas."');
  const myChart_diagpairesdemots = new Chart(ctx_diagpairesdemots,config_diagpairesdemots);
  ");
}

 ?>