<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Establish a database connection (you'll need to provide your own database credentials)
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "model";

    $conn = new mysqli($servername, $db_username, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert user input into the database (assuming you have a "users" table)
    $sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        // Redirect to the next page after successful login
        header("Location: next_page.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
