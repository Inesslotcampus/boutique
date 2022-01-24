<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="MMGI" content="Accueil" />
  <meta name="description" content="Agence de voyage et d'activité">
  <link rel="stylesheet" href="Accueil.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/392b208157.js" crossorigin="anonymous"></script>
  <title>
  ProjectV
  </title>
</head>

<body>

  <div class="HEAD">
    <div class="navbar">
      <img src="../img/logoV2.png" alt="logo de l'agence de voyage Project V" class="logo">
      <div class="button">
        <a href="#H" class="histoire">Notre Histoire</a>
        <a href="#T" class="team">Notre équipe</a>
      </div>
    </div>

    <div class="prez">
      <h1>Project V</h1>
      <p>L'Agence de voyage qui vous propose les activités les plus inédites.</p> <br>
      <a href="../catalogue/catalogue.html" class="catalogue">Catalogue</a>
    </div>
    
  </div>

<?php
$nom="Table cube";
$prix=" 250 euros";
$photo= "<img src=imagecube.jfif>";

echo $nom;
echo "<br /> $photo";
echo  "<br /> $prix";?>


<div class="footer">
    <ul>
      <li><a href="#A">Accueil</a></li>
      <li><a href="#H">Notre histoire</a></li>
      <li><a href="#T">Notre équipe</a></li>
      <li><a href="#"><img src="../img/instagram-svgrepo-com.svg" alt="instagram" class="icone"></a>
        <a href="#"><img src="../img/facebook-svgrepo-com.svg" alt="facebook" class="icone"></a>
        <a href="#"><img src="../img/youtube-svgrepo-com.svg" alt="youtube" class="icone"></a>
      </li>
    </ul>
  </div>
