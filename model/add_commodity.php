<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle adding a commodity to the database
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    
    // Perform database connection and insertion (replace with your own credentials)
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $database = "model";
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $stmt = $conn->prepare("INSERT INTO commodities (name, description, price) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $name, $description, $price);
    
    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        header("Location: next_page.html");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
