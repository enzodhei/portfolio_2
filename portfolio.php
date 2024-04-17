<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>PORTFOLIO</title>
  <link href="style1.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js"></script>
</head>
<body>
<script>
$(document).ready(function(){
  console.log("Ready");
  getData();

})
function getData() {
  $.ajax( {
    url: "getDataPortfolio.php",
    dataType: "json",
    method:"post",
    data: {

    },
    success: function( data ) {
      console.log(data);
    }
  });
}
</script>
<nav>
<ul>
    <li class="deroulant"><a href="#"> &ensp;</a>
      <ul class="sous">
        <li><a href="#">test</a></li>
        <li><a href="#">test</a></li>
        <li><a href="#">test</a></li>
      </ul>
    </li>
    <li class="deroulant"><a href="#"> &ensp;</a>
      <ul class="sous">
        <li><a href="#">test</a></li>
        <li><a href="#">test</a></li>
        <li><a href="#">test</a></li>
      </ul>
    </li>
    <li><a href="me contacter">Me contacter</a></li>
    <li><a href="portfolio">Portfolio</a></li>
  </ul>
</nav>
  </nav>
  </div>
<div class="tableau">
<div class="titre">
  <h1 class="animated-heading">BTS SERVICES INFORMATIQUES AUX ORGANISATIONS</h1>
    <p>Tableau de synthèse des réalisations professionnelles (2023-2025)</p>
</div>
    <table>
      <thead>
        <tr>
          <th width="30%">Réalisation</th>
          <th>Gérer le patrimoine informatique</th>
          <th>Répondre aux incidents et aux demandes d’assistance et d’évolution</th>
          <th>Développer la présence en ligne de l’organisation</th>
          <th>Travailler en mode projet</th>
          <th>Mettre à disposition des utilisateurs un service informatique</th>
          <th>Organiser son développement professionnel</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScUl8V_4ybaoAyQ545Hs_1XUzC5sStXSyZmAp2k7juzw&s); background-repeat:no-repeat;background-position:center;"></td>
          <td>
            ▸Recenser et identifier les ressources numériques <br>
            ▸Exploiter des référentiels, normes et standards adoptés par le prestataire informatique <br>
            ▸Mettre en place et vérifier les niveaux d’habilitation associés à un service <br>
            ▸Vérifier les conditions de la continuité d’un service informatique <br>
            ▸Gérer des sauvegardes <br>
            ▸Vérifier le respect des règles d’utilisation des ressources numériques
          </td>
          <td>
            ▸Collecter, suivre et orienter des demandes <br>
            ▸Traiter des demandes concernant les services réseau et système, applicatifs <br>
            ▸Traiter des demandes concernant les applications
          </td>
          <td>
            ▸Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques <br>
            ▸Référencer les services en ligne de l’organisation et mesurer leur visibilité. <br>
            ▸Participer à l’évolution d’un site Web exploitant les données de l’organisation.
          </td>
          <td>
            ▸Analyser les objectifs et les modalités d’organisation d’un projet <br>
            ▸Planifier les activités <br>
            ▸Évaluer les indicateurs de suivi d’un projet et analyser les écarts
          </td>
          <td>
            ▸Réaliser les tests d’intégration et d’acceptation d’un service <br>
            ▸Déployer un service <br>
            ▸Accompagner les utilisateurs dans la mise en place d’un service
          </td>
          <td>
            ▸Mettre en place son environnement d’apprentissage personnel <br>
            ▸Mettre en œuvre des outils et stratégies de veille informationnelle <br>
            ▸Gérer son identité professionnelle <br>
            ▸Développer son projet professionnel
          </td>
        </tr>
        <tr>
            <td>Formation</td>
        </tr>
        <tr>
            <td>Réalisation du portfolio</td>
            <td class="ok">OK</td>
            <td class="ok">OK</td>
            <td class=""></td>
            <td class="ok">OK</td>
            <td class="ok">OK</td>
            <td class="ok"></td>
        </tr>

        <tr>
            <td>Réalisation d'un site WEB sur ma passion à partir d'un framework personnel</td>
            <td class="ok">OK</td>
            <td class="ok"></td>
            <td class="ok">OK</td>
            <td class="ok">OK</td>
            <td class=""></td>
            <td class="ok">OK</td>
        </tr>

        <tr>
            <td>Site Frontend en VUE Js</td>
            <td class="ok"></td>
            <td class="ok">OK</td>
            <td class="ok"></td>
            <td class="ok">OK</td>
            <td class="ok">OK</td>
            <td class=""></td>
        </tr>

        <tr>
            <td>Personnelle</td>
            <td class="ok"></td>
            <td class="ok">OK</td>
            <td class="ok"></td>
            <td class="ok">OK</td>
            <td class="ok">OK</td>
            <td class="ok">OK</td>
            
        </tr>
        <tr>
            <td>Site MMA</td>
            <td class="ok"></td>
            <td class="ok">OK</td>
            <td class="ok">OK</td>
            <td class="ok"></td>
            <td class="ok"></td>
            <td class="ok">OK</td>
            
        </tr>

    </table>
  </div>
  <footer>
    <p> ©2024 Dheilly Enzo</p>
  </footer>
</body>
</html>
