<?php

$servername = "localhost";
$username = "root";
$password = "Suchy44";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection error: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['register_error'] = "Username is taken";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $user, $pass);
        if ($stmt->execute()) {
            header("Location: login.php");
            exit();
        } else {
            echo "error: " . $stmt->error;
        }
    }

    $stmt->close();
}

$conn->close();
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
    </div>
</div>
<div class="login-box">
    <div class="text-container">
        <h2 class="login-header">Sign up</h2>

        <form class="login-form" action="register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <?php
            if (isset($_SESSION['register_error'])) {
                echo '<p class="error-message">' . $_SESSION['register_error'] . '</p>';
                unset($_SESSION['register_error']);
            }
            ?>
            <button type="submit">Register</button>
            <a href="login.php" class="register">Sign in</a>
        </form>
    </div>
</div>
</body>
</html>
