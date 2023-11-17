<?php
// Perform database connection and retrieval (replace with your own credentials)
$servername = "localhost";
$username = "root";
$password = "";
$database = "model";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name FROM categories";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['name']} <a href='delete_category.php?id={$row['id']}'>Delete</a></li>";
    }
} else {
    echo "No categories found.";
}

$conn->close();
?>
