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

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Połączenie nieudane: " . $conn->connect_error);
}

$user = $_SESSION['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['topic'];
$date = $_POST['date'];
$time = $_POST['time'];

$sql = "SELECT * FROM bookings WHERE date = ? AND time = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $date, $time);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "This hour is already booked by someone.";
    $stmt->close();
    $conn->close();
    exit();
}

$stmt = $conn->prepare("INSERT INTO bookings (username, name, email, message, date, time) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $user, $name, $email, $message, $date, $time);

if ($stmt->execute()) {
    echo "success";
    header("Location: reservations.php");
    exit();
} else {
    echo "error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
