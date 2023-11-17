<?php
if (isset($_GET["id"])) {
    $category_id = $_GET["id"];
    
    // Perform database connection and deletion (replace with your own credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "model";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $stmt = $conn->prepare("DELETE FROM categories WHERE id = ?");
    $stmt->bind_param("i", $category_id);
    
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
