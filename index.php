<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Accueil - Le Bora-Bora</title>
  <?php include_once 'include/head.php'; ?>
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
  <script>
    $(document).ready(function(){				   	
      $('.slider')._TMS({
        show:0,
        pauseOnHover:true,
        prevBu:false,
        nextBu:false,
        playBu:false,
        duration:800,
        preset:'fade',
        pagination:true,
        pagNums:false,
        slideshow:7000,
        numStatus:false,
        banners:'fade',
        waitBannerAnimation:false,
        progressBar:false
      })		
    });
  </script>
</head>



<body>
  <?php include_once 'include/header.php' ?>
  
  <!--==============================Diaporama================================-->
  <div id="slide">
    <div class="slider">
      <ul class="items">
        <li>
          <img src="img/32066996.jpg" alt="Vue plage - Hôtel" />
          <div class="banner">
            <p class="text-1a">Un emplacement <strong>Idéal !</strong></p>
            <p class="text-2">Ut ééééwisi enim ahd minim veniam quis nostrud exerci takltion ulamc orper suscipit lobortis</p>
          </div>
        </li>
        
        <li>
          <img src="img/32067055.jpg" alt="Vue mer" />
          <div class="banner">
            <p class="text-1a">Un environement <strong>Idyllique ...</strong></p>
            <p class="text-2">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
          </div>
        </li>
        
        <li>
          <img src="img/36805713.jpg" alt="Vue bungalo - Chemins" />
          <div class="banner">
            <p class="text-1a">Un site <strong>Arboré</strong></p>
            <p class="text-2">Feugiat nulla facilisis at vero erots et accumsan et iusto odio dignis sim qui blandit.</p>
          </div>
        </li>
      </ul>
     </div>
  </div>
  
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_12 box-1">
        <img src="img/page1-img1.png" alt="Picto" />
        <div class="extra-wrap">
          <h2>L'Ile des <span>Pins</span></h2>
          <p>En Nouvelle Calédonie, L’île des Pins est une destination unique.</p>
          <p>Le Bora-Bora Hôtel & Spa, a été construit en 1998 dans un style moderne et comporte des bungalows.</p>
          <p>Dans la baie de Kanumera, près du lagon, l’hôtel séduit par son luxe sage dans une atmosphère unique alliant modernité et gastronomie.</p>
        </div>
      </div>
      
      <div class="grid_8">
        <h2 class="top-1">Nos prestations</h2>
        <div class="box-3">
          <div>
            <img src="img/spa.jpg" alt="Spa" class="img-border size-1" />
            <a href="nos-prestations.php#spa" class="link-2">Spa</a>
            <p>Avec piscine intérieure chauffée, sauna, jacuzzi</p>
          </div>
          <div>
            <img src="img/golf.jpg" alt="Golf" class="img-border size-1" />
            <a href="nos-prestations.php#golf" class="link-2">Golf</a>
            <p>1 parcours de golf 15 trous</p>
          </div>
          <div class="last">
            <img src="img/seminaire.jpg" alt="Séminaires / Mariages" class="img-border size-1" />
            <a href="nos-prestations.php#seminaires" class="link-2">Séminaires / Mariages</a>
            <p>Des salles et salons adaptables à vos besoins</p>
          </div>
        </div>
        <a href="nos-prestations.php" class="button top-4">En savoir plus ...</a>
      </div>

      <div class="grid_4">
        <h2 class="top-1">Au programme ...</h2>
        <div class="box-4 top-2">
          <div class="date"><strong>17</strong><span>Avril 2017</span></div>
          <p>
            <a href="/calendrier.php#paques" class="link">La chasse aux OEux de Pâques</a><br/>
            Venez nous rejoindre lors de cette grande fête annuelle !
          </p>
        </div>
        <div class="box-4 top-3">
          <div class="date"><strong>14</strong><span>Juillet 2017</span></div>
          <p>
            <a href="/calendrier.php#14juillet" class="link">NOTRE feu d'Artifice du 14 Juillet</a><br/>
            Venez assister à notre célèbre feu d'artifice !
          </p>
        </div>
        <a href="/calendrier.php" class="button top-4">Voir toutes les dates ...</a>
      </div>
      
      <div class="clear"></div>
    </div>
  </section>
  
  <!--==============================footer=================================-->
  <?php include_once 'include/footer.php' ?>
</body>
</html>