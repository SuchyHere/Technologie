<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Portfolio</title>
  <meta name="author" content="Portfolio">
  <meta name="keywords" content="portfolio">
  <meta name="description" content="null">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
<div class="container">
  <div class="box">
    <a href="index.php">
      <img src="img/male%20logo.png" alt="logo" class="logo"/>
    </a>
    <div class="navigations">
        <a href="reservations.php" class="navigation">My Reservations</a>
        <a href="logout.php" class="navigation">Logout</a>
        <a href="work.php" class="navigation">Work</a>
        <a href="contact.php" class="navigation">Contact</a>
        <a href="about.php" class="navigation">About me</a>
    </div>
  </div>
</div>
<div class="grid-container">
  <div class="section-container work">
    <h1 class="title">Latest Projects</h1>
    <h2 class="name">Cashflow</h2>
    <img src="img/Frame%204.png" alt="Michal Suchecki" class="project-img"/>
    <div class ="work-text">
    <p>A web and dekstop app that helps with home's or small companies budget allocation</p>
    </div>
  </div>


  <div class="section-container work">
    <h2 class="name">Cryptoapp</h2>
    <img src="img/Frame%204_1.png" alt="Michal Suchecki" class="project-img"/>
    <div class ="work-text">
      <p>A desktop app allowing users to view real-time market prices of selected crypto coins</p>
    </div>
  </div>

</div>
</body>
</html>
