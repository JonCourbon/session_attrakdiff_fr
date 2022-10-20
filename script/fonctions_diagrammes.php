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
      elements:{
        point: {
          radius:0
        }
      },
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
    labels: ['Technique-Humain','Compliqué-Simple','Pas pratique-pratique','Fastidieux - Efficace','Imprévisible-prévisible','Confus - Clair','Incontrôlable - contrôlable','Conventionnel-Original','Sans imagination - Créatif','Prudent - Audacieux','Conservateur-Novateur','Ennuyeux-Captivant','Peu exigeant - Challenging','Commun - Nouveau','M\'isole - Me sociabilise','Amateur-Professionnel','De mauvais goût - De bon goût','Bas de gamme','Haut de gamme','M\'exclut - M\'intègre','Me sépare des autres - Me rapproche des autres','Non présentable-Présentable','Déplaisant-Plaisant','Laid-Beau','Désagréable-Agréable','Rebutant-Agréable','Mauvais-Bon','Repoussant-Attrayant','Décourageant-Motivant'],
    datasets: [{
      data: [".$scores['QP']['QP1'].",".$scores['QP']['QP2'].",".$scores['QP']['QP3'].",".$scores['QP']['QP4'].",".$scores['QP']['QP5'].",".$scores['QP']['QP6'].",".$scores['QP']['QP7'].",".$scores['QHS']['QHS1'].",".$scores['QHS']['QHS2'].",".$scores['QHS']['QHS3'].",".$scores['QHS']['QHS4'].",".$scores['QHS']['QHS5'].",".$scores['QHS']['QHS6'].",".$scores['QHS']['QHS7'].",".$scores['QHI']['QHI1'].",".$scores['QHI']['QHI2'].",".$scores['QHI']['QHI3'].",".$scores['QHI']['QHI4'].",".$scores['QHI']['QHI5'].",".$scores['QHI']['QHI6'].",".$scores['QHI']['QHI7'].",".$scores['ATT']['ATT1'].",".$scores['ATT']['ATT2'].",".$scores['ATT']['ATT3'].",".$scores['ATT']['ATT4'].",".$scores['ATT']['ATT5'].",".$scores['ATT']['ATT6'].",".$scores['ATT']['ATT7']."],
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
      elements:{
        point: {
          radius:5,
          pointStyle:'rect'
        }
      },
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

function tracerDiagPortfolioResultats($moyennes,$idcanvas){
  echo ("
  	var trace = {
  x: [".$moyennes['QP']."],
  y: [".(($moyennes['QHS']+$moyennes['QHI'])/2.)."],
  type: 'scatter',
  mode: 'markers',
  marker: { size: 20 }
};
var data = [trace];
var layout = {
  width: 500,
  height: 500,
  xaxis: {
    autotick: false,
    ticks: 'outside',
    tick0: 0,
    dtick: 1,
    ticklen: 8,
    tickcolor: '#000',
    range: [-3,3 ],
    title: {
      text: 'Qualité pragmatique',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    },
  },
  yaxis: {
    autotick: false,
    ticks: 'outside',
    tick0: 0,
    dtick: 1,
    ticklen: 8,
     range: [-3,3 ],
    tickcolor: '#000',
    title: {
      text: 'Qualité hédonique',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    },
  },
  title: {
    text:'Portfolio des résultats',
    font: {
      family: 'Courier New, monospace',
      size: 24
    },
    xref: 'paper',
    x: 0.05,
  },
  shapes: [
{
      type: 'rect',
      x0: 1,
      y0: 1,
      x1: 2,
      y1: 3,
      line: {
        color: 'rgba(128, 0, 128, 1)'
      }

    },

    ]
};

var config = {
	responsive: true,
	locale: 'fr'
	}
Plotly.newPlot('".$idcanvas."', data, layout,config);

  ");
}

 ?>
