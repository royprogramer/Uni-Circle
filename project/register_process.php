<?php
 include "db_conn.php";
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username, password, and email from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $user_Email = $_POST["email"];


    // Prepare and execute a SQL query to insert the new user
    if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"]) )
    {
        $stmt = $conn->prepare('INSERT INTO user_table (username, User_Email, password) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $username, $user_Email, $password);
        $stmt->execute();
        echo "Registration successful";
    }
    // Check if the query was successful

    if ($stmt->affected_rows > 0) {
        // Registration successful, redirect to the login page
        header("Location:index.html");
        exit();
    } else {
        // Registration failed, display an error message
        echo "An error occurred while registering the user.";
    }
}
 

?>