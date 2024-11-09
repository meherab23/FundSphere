<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_lms";


$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$cardName = $_POST["card_name"];
$cardNumber = $_POST["card_number"];
$cardCVV = $_POST["card_cvv"];
$cardExpireDate = $_POST["card_expire_date"];
$amount = $_POST["amount"];


$sql = "INSERT INTO donations (name, email, phone_number, card_name, card_number, card_cvv, card_expire_date, amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssd", $name, $email, $phone, $cardName, $cardNumber, $cardCVV, $cardExpireDate, $amount);

if ($stmt->execute()) {
    header("Location: create_donation.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>