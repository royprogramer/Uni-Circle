<?php

// Check if the verification token is present in the URL

session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['token'])) {
    // Retrieve the verification token from the URL
    $verification_token = $_GET['token'];
    echo''. $verification_token .'';

    // Check if the token matches the one stored in the session
    if (isset($_SESSION['user_data']) && $_SESSION['user_data']['verification_token'] === $verification_token) {
        // Token is valid, retrieve user data from the session
        $username = $_SESSION['user_data']['username'];
        $password = $_SESSION['user_data']['password'];
        $user_Email = $_SESSION['user_data']['email'];
        echo $password;

        // Include database connection
        include "db_conn.php";

        // Prepare and execute a SQL query to insert the new user
        $stmt = $conn->prepare('INSERT INTO user_table (username, User_Email, password) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $username, $user_Email, $password);
        $stmt->execute();

        // Check if the query was successful
        if ($stmt->affected_rows > 0) {
            // Registration successful, redirect to the login page
            header("Location: login.php");
            exit();
        } else {
            // Registration failed, display an error message
            echo "An error occurred while registering the user.";
        }

        // Close the database connection
        $stmt->close();
        $conn->close();

        // Unset the session data
        unset($_SESSION['user_data']);
    } else {
        // Invalid token or token not found
        echo "Invalid verification token.";
    }
} else {
    // Redirect to an error page if accessed directly or with incorrect method
    header("Location: error.php");
    exit();
}

?>
