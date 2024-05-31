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
            <a href="about.html" class="navigation">About me</a>
        </div>
    </div>
</div>
<div class="grid-container">
    <div class="section-container about-me">
        <h2 class="section-title">About Me</h2>
        <img src="img/zdjecie.png" alt="Michal Suchecki" class="profile-photo"/>
        <p>Hi! <br> My name is Michał Suchecki and I am currently a second-year computer science student at the University of Economics in Katowice. <br> I have been passionate about technology for as long as I can remember and I am constantly seeking ways to develop my skills.</p>
    </div>


    <div class="section-container skills">
        <h2 class="section-title">Skills</h2>
        <h3>Languages I am comfortable with:</h3>
        <ul>
            <li>Python</li>
            <li>Java</li>
            <li>C#</li>
            <li>C</li>
            <li>C++</li>
        </ul>
    </div>


    <div class="section-container specialization">
        <h2 class="section-title">Specialization</h2>
        <p>I specialize in data preprocessing and artificial intelligence. <br> I utilize advanced techniques for data cleansing and predictive model creation, delivering innovative business solutions.</p>
    </div>
</div>
</body>
</html>
