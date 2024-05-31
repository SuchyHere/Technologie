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
<div class="contact-header">
    <h1>Contact me</h1>
</div>
<div class="contact-forms">
    <div class="contact-form">
        <h2>Book a meeting</h2>
        <form action="schedule.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="Name" required>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="E-mail" required>
            <label for="topic">Topic:</label>
            <input type="topic" name="topic" placeholder="Topic" required>
            <label for="date">Select a date:</label>
            <input type="date" id="date" name="date" required>
            <label for="time">Select a time:</label>
            <select id="time" name="time" required>
                <option value="16:00">16:00</option>
                <option value="16:30">16:30</option>
                <option value="17:00">17:00</option>
                <option value="17:30">17:30</option>
            </select>
            <br>
            <button type="submit">Book</button>
        </form>
    </div>
</div>
</body>
</html>
