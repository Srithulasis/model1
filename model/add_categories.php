<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["category_name"])) {
    $category_name = $_POST["category_name"];
    
    // Perform database connection and insertion (replace with your own credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "model";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $stmt = $conn->prepare("INSERT INTO categories (name) VALUES (?)");
    $stmt->bind_param("s", $category_name);
    
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
