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
    <img src="img/male%20logo.png" alt="logo" class="logo"/>
      <div class="navigations">
          <a href="reservations.php" class="navigation">My Reservations</a>
          <a href="logout.php" class="navigation">Logout</a>
          <a href="work.php" class="navigation">Work</a>
          <a href="contact.php" class="navigation">Contact</a>
          <a href="about.php" class="navigation">About me</a>
      </div>
  </div>
</div>
<div class="logo-box">
  <div class="text-container">
    <h2>Michał</h2>
    <h2>Suchecki</h2>
    <p>back-end developer</p>
    <a href="about.php" class="about-me-link">
      <button class="about-me-button">About me</button>
    </a>
  </div>
  <img src="img/Duze%20logo.png" alt="Central Logo" class="center-logo"/>
</div>
<div class="social-icons">
  <a href="https://www.linkedin.com" target="_blank">
    <img src="img/linkedin.png" alt="LinkedIn">
  </a>
  <a href="https://www.youtube.com" target="_blank">
    <img src="img/yt.png" alt="YouTube">
  </a>
  <a href="https://www.instagram.com" target="_blank">
    <img src="img/instagram.png" alt="Instagram">
  </a>
  <a href="https://www.twitter.com" target="_blank">
    <img src="img/twitter.png" alt="Twitter">
  </a>
</div>

</body>
