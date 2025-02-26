<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
include 'db_connect.php'; // Include database connection

// Get the ID from URL (e.g., index.php?id=3)
$specific_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$sql = "SELECT id, house_no, category_id, description, price FROM houses WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>House Details</h2>";
    //echo "<p><b>ID:</b> " . $row['id'] . "</p>";
    echo "<p><b>House No:</b> " . $row['house_no'] . "</p>";
    //echo "<p><b>Category ID:</b> " . $row['category_id'] . "</p>";
    echo "<p><b>Description:</b> " . $row['description'] . "</p>";
    echo "<p><b>Price:</b> RM" . $row['price'] . "</p>";
} else {
    echo "No record found.";
}

$conn->close();
?>