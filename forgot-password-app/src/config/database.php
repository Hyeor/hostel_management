<?php
// filepath: forgot-password-app/src/config/database.php
$conn= new mysqli('localhost','root',password: '',database: 'house_rental_db')or die("Could not connect to mysql".mysqli_error($con));

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db :" . $e->getMessage());
}
?>