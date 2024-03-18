<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'vendor/autoload.php';
    include "db_conn.php";
    session_start();

    // Get username, password, and email from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $user_Email = $_POST["email"];

    // Generate a verification token
    $verification_token = bin2hex(random_bytes(16)); // Generate a random token

    // Store user data and verification token in session
    $_SESSION['user_data'] = [
        'username' => $username,
        'password' => $password,
        'email' => $user_Email,
        'verification_token' => $verification_token
    ];

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = "sampadroykoushik01@gmail.com"; // SMTP username
        $mail->Password = "zbdeygbjnigefxlm"; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email content
        $mail->setFrom('sampadroykoushik01@gmail.com', 'Webslesson');
        $mail->addAddress($user_Email);
        $mail->isHTML(true);
        $mail->Subject = 'Registration Verification for Chat Application Demo';
        $mail->Body = '<p>Thank you for registering for Chat Application Demo.</p>
                       <p>This is a verification email, please click the link below to verify your email address:</p>
                       <p><a href="http://localhost/Project%20Files/project/verfication_process.php?token='. $verification_token . '">Verify Email</a></p>
                       <p>Thank you...</p>';

        // Send email
        $mail->send();
      echo $verification_token;
        // Redirect to a page indicating that a verification email has been sent
        header("Location: verification_sent.php");
        exit();
    } catch (Exception $e) {
        // Display any exceptions
        echo "Error: " . $e->getMessage();
    }
}

?>
