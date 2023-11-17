<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST["product_name"];
    $quantity = $_POST["quantity"];
    $buyer_name = $_POST["buyer_name"];

    // You can add your database connection and query to store the order here
    // For example, using MySQLi:
    // $db = new mysqli("localhost", "username", "password", "database");
    
    // Check for database connection errors
    
    // Insert the order into the database
    // $query = "INSERT INTO orders (product_name, quantity, buyer_name) VALUES ('$product_name', $quantity, '$buyer_name')";
    // $result = $db->query($query);
    
    // Check for query execution errors

    // Close the database connection

    // Redirect to a success page or show a success message
    // header("Location: success.html");
    // echo "Order placed successfully.";
}
?>
