<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Nos prestations - Le Bora-Bora</title>
  <?php include_once 'include/head.php' ?>
</head>
<body>
  <?php include_once 'include/header.php' ?>
  
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12 top">
      <div class="grid_12 box-1">
        <img src="img/page1-img1.png" alt="Picto" />
        <div class="extra-wrap">
          <h2>LES CHAMBRES</h2>
          <ul class="list-1">
            <li>Des Chambres dans un charmant style Déco Moderne.</li>
            <li>Le Bora-Bora vous propose 80 chambres et suites, réparties sur plusieurs bungalows, au décor élégant et raffiné.</li>
            <li>
              Dotées d’un design élégant, elles offrent une vue sur Le lagon et la baie de Kanumera<br/>
              Le mariage du confort et de la décoration moderne s’y harmonisent parfaitement.
            </li>
            <li>
              Toutes les chambres sont équipées de :<br/>
              <ul>
                <li>Ecran plat</li>
                <li>Coffre-fort</li>
                <li>Satellite – Pay TV</li>
                <li>Room-service</li>
                <li>Accès Internet WIFI gratuit</li>
                <li>Service réveil et conciergerie</li>
                <li>Téléphone direct</li>
                <li>Peignoir, Mini-bar, Sèche-cheveux</li>
              </ul>
            </li>
            <li class="red">Les animaux ne sont pas accueillis dans les chambres.</li>
            <li>
              Les chambres sont classées selon la nomenclature suivante :
              <ul>
                <li>Suite</li>
                <li>Chambres Classic</li>
                <li>Bungalow sur le lagon</li>
                <li>bungalow vue jardin</li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      
      <div class="grid_12 box-1">
        <img src="img/page1-img1.png" alt="Picto" />
        <div class="extra-wrap">
          <h2>LES RESTAURANTS &amp; LE BAR</h2>
            <ul class="list-1">
              <li>
                Gilles Petit, Maître d'Hôtel du Bora-Bora depuis 25 ans, veille au bon fonctionnement du bar et des deux restaurants.
                <ul>
                  <li>Le Cagou, 100 couverts par service midi et soir, 365 jours sur 365.</li>
                  <li>Le Bugny, 40 couverts le soir, toute  l'année.</li>
                </ul>
                Deux restaurants, deux univers, deux façons de travailler.
              </li>
              <li>
                Le Bar "Le MoeMiti" :  Mythique à L’île des Pins.<br/>
                Le MoeMiti offre, dans un style très raffiné, un lieu de convivialité élégant et feutré.<br/>
                Venez vous relaxer autour d’un verre dans une ambiance des îles (boiseries acajou, tissu coloré, des fauteuils confortables).<br/>
                Toute l’année, profitez de la terrasse avec vue sur le lagon.
              </li>
            </ul>
        </div>
      </div>
      
      <div class="grid_12 box-1">
        <img src="img/page1-img1.png" alt="Picto" />
        <div class="extra-wrap" id="spa">
          <h2>LE SPA</h2>
            <ul class="list-1">
              <li>L’hôtel Bora-Bora et Nuxe se sont associés pour vous présenter un espace de bien être exceptionnel dans un lieu unique où les mots harmonie, sensations, émotions et détente trouvent tout leur sens.</li>
              <li>Le Spa NUXE procure un réconfort et  un apaisement nouveau par l’association de ses produits de cosmétologie d’origine naturelle à des techniques exclusives manuelles.</li>
              <li>Dans ce lieu magique, 5 cabines de soins, dont une double, un hammam, Sauna, Jacuzzi et une piscine intérieure vous accueillent pour vous procurer des instants voluptueux et relaxants.</li>
              <li>Avec sa carte aussi riche que complète en soins visage, soins corps, massages, NUXE allie son sens du plaisir et de la gourmandise.</li>
              <li>Le sauna, jacuzzi et la piscine sont en accès libre  aux utilisateurs du SPA (droit d’entrée 3500FCFP, gratuit à toutes personnes faisant un soin).</li>
            </ul>
            <div class="grid_12">
                <a href="spa.php" class="button">Réserver</a>
            </div>
        </div>
      </div>
      
      <div class="grid_12 box-1">
        <img src="img/page1-img1.png" alt="Picto" />
        <div class="extra-wrap" id="seminaires">
          <h2>LES SEMINAIRES &amp; MARIAGES</h2>
          <ul class="list-1">
            <li>Un nouvel art de vivre les affaires dans un environnement où modernité et design côtoient authenticité et qui feront de vos évènements des véritables moments d'exception et de savoir-faire.</li>
            <li>
              Les salles de réunion :
              <ul>
                <li>2 salles de 200 m² à la lumière du jour, de 120 personnes, climatisation</li>
                <li>3 salles de 50 m², de 40 personnes, climatisation</li>
              </ul>
              Les salles de réunion étant modulables entre elles, permettent de proposer les superficies suivantes :
              <ul>
                <li>50m²</li>
                <li>100m²</li>
                <li>200m²</li>
                <li>300m²</li>
                <li>400m²</li>
                <li>500m²</li>
              </ul>
            </li>
            <li>
              Les salons de réception privés pour les mariages :
              <ul>
                <li>Salon Kanumera : 150 personnes</li>
                <li>Salon Gadgi : 80 personnes</li>
                <li>Salon Oro : 60 personnes</li>
                <li>Salon Upi : 36 personnes</li>
                <li>Salon Ouaméo : 36 personnes</li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      
      <div class="clear"></div>
    </div>
  </section>
  
  <!--==============================footer=================================-->
  <?php include_once 'include/footer.php' ?>
</body>
</html>