<?php
// Check if the OTP is present in the POST data
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['otp'])) {
    // Retrieve the OTP from the POST data
    $otp = $_POST['otp'];

    // Check if the OTP matches the one stored in the session
    if (isset($_SESSION['user_data']) && $_SESSION['user_data']['otp'] == $otp) {
        // OTP is valid, retrieve user data from the session
        $inputUsername = $_SESSION['user_data']['username'];
        $inputPassword = $_SESSION['user_data']['password'];
        $inputUserEmail = $_SESSION['user_data']['email'];
        $hashedPassword = password_hash($inputPassword, PASSWORD_DEFAULT);
    


        // Include database connection
        include "db_conn.php";

        // Prepare and execute a SQL query to insert the new user
        $stmt = $conn->prepare('INSERT INTO user_table (username, User_Email, password) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $inputUsername, $inputUserEmail, $hashedPassword);
        $stmt->execute();

        // Check if the query was successful
        if ($stmt->affected_rows > 0) {
            // Registration successful, redirect to the login page
            header("Location: index.php");
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
        // Invalid OTP or OTP not found
        echo "Invalid OTP.";
    }
} else {
    // Redirect to an error page if accessed directly or with incorrect method
    header("Location: error.php");
    exit();
}
?>