<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}


$servername = "localhost";
$username = "root";
$password = "Suchy44";
$dbname = "portfolio";

// Tworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection error: " . $conn->connect_error);
}

$user = $_SESSION['username'];

$sql = "SELECT * FROM bookings WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();

?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Moje Rezerwacje</title>
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
    <h1>Booked meetings</h1>
</div>
<div class="contact-forms">
    <div class="contact-form">
        <h2 class="meeting">Your booked meetings:</h2>
        <table border="1">
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Name</th>
                <th>Email</th>
                <th>Topic</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["date"]. "</td><td>" . $row["time"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["message"]. "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='null'>No reservations made</td></tr>";
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>
<?php
$stmt->close();
$conn->close();
?>
