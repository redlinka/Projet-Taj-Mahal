<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Pixelify+Sans:wght@400..700&family=Ysabeau+SC:wght@1..1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style/glossairestyle.css" />
  <link rel="stylesheet" href="../css/style/headerstyle.css" />
  <link rel="stylesheet" href="../css/style/footerstyle.css" />
  <title>Crédits | Taj Mahal</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #1E1E1E;
      color: white;
    }

    .hero {
      background-image: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)), url('img_credits/fond_banniere.png');
      background-size: cover;
      background-position: center;
      text-align: left;
      padding: 6rem 1rem;
    }

    .hero h1 {
      padding-left: 3.5rem;
      font-size: 7rem;
    }

    .hero p {
      font-style: italic;
      font-size: 1.2rem;
      margin-top: 0.5rem;
      padding-left: 3.5rem;
    }

    .section {
      display: flex;
      max-width: 1000px;
      margin: 3rem auto;
      overflow: hidden;
      position: relative;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      font-size: 1.2rem;
    }

    .section.image-right {
      background-color: white;
      color: black;
      margin-left: auto;
      margin-right: 25rem;
    }

    .section.image-left {
      background-color: #262525;
      box-shadow: inset 0 4px 12px rgba(0, 0, 0, 0.5);
      color: white;
      flex-direction: row-reverse;
      margin-left: 25rem;
      margin-right: auto;
    }


    .text {
      flex: 1;
      padding: 2rem;
    }

    .image-wrapper {
      position: relative;
      width: 300px;
      flex-shrink: 0;
    }

    .image-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .section.image-right .image-wrapper::before {
      content: "";
      position: absolute;
      top: 0;
      left: 25px;
      width: 52px;
      height: 100%;
      background-color: #1E1E1E;
      transform: skewX(35deg);
      z-index: 1;
    }

    .section.image-left .image-wrapper::before {
      content: "";
      position: absolute;
      top: 0;
      right: 25px;
      width: 52px;
      height: 100%;
      background-color: #1E1E1E;
      transform: skewX(-35deg);
      z-index: 1;
    }

    .section .text h2 {
      margin-bottom: 1rem;
    }

    .section .text p {
      line-height: 1.5;
    }

    @media (max-width: 768px) {
      .section {
        flex-direction: column !important;
      }

      .image-wrapper {
        width: 100%;
      }

      .image-wrapper::before {
        display: none;
      }

      .section .text {
        padding: 1rem;
      }
    }
  </style>
  <?php include_once '../includes/header.php'; ?>

<body>
  <section class="hero">
    <h1>Qui sommes-nous ?</h1>
    <p>Aux sujets des développeurs de ce site...</p>
  </section>

  <!--But du projet-->
  <div class="section image-right">
    <div class="text">
      <h2>Le but de ce projet</h2>
      <p> Ce site web a été réalisé dans le cadre d’un projet universitaire mené en partenariat avec l’UNESCO. Il s’inscrit dans un exercice de mise en situation professionnelle, visant à développer nos compétences en gestion de projet, communication numérique, accessibilité et médiation culturelle. Notre objectif est de proposer une plateforme claire, accessible et enrichissante pour tous les publics — voyageurs, curieux, chercheurs ou simples passionnés d’histoire — souhaitant découvrir le Taj Mahal autrement, que ce soit avant, pendant ou après leur visite.</p>
    </div>
    <div class="image-wrapper">
      <img src="/css/img/img_credits/unesco.png" alt="UNESCO">
    </div>
  </div>

  <!--Rayan-->
  <div class="section image-left">
    <div class="text">
      <h2>ESSAIDI Rayan</h2>
      <p>Chargé de développement et de recherche</p>
    </div>
    <div class="image-wrapper">
      <img src="/css/img/img_credits/rayan.png" alt="Rayan">
    </div>
  </div>

  <!--Loane-->
  <div class="section image-right">
    <div class="text">
      <h2>MUSY Loane</h2>
      <p>Chargée de Communication</p>
    </div>
    <div class="image-wrapper">
      <img src="/css/img/img_credits/loane.png" alt="Loane">
    </div>
  </div>

  <!--Bakary-->
  <div class="section image-left">
    <div class="text">
      <h2>SISSOKO Bakary</h2>
      <p>Chargé de recherche</p>
    </div>
    <div class="image-wrapper">
      <img src="/css/img/img_credits/bakary.png" alt="Bakary">
    </div>
  </div>

  <!--Yanis-->
  <div class="section image-right">
    <div class="text">
      <h2>PERES Yanis</h2>
      <p>Contenu et planification</p>
    </div>
    <div class="image-wrapper">
      <img src="/css/img/img_credits/yanis.png" alt="Yanis">
    </div>
  </div>

  <!--Adam-->
  <div class="section image-left">
    <div class="text">
      <h2>NACHNOUCHI Adam</h2>
      <p>Charge de la mise en ligne du site, contenu et recherche</p>
    </div>
    <div class="image-wrapper">
      <img src="/css/img/img_credits/adam.png" alt="Adam">
    </div>
  </div>

<?php include_once '../includes/footer.php'; ?>
</html>