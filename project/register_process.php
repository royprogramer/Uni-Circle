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
    $otp = rand(100000, 999999); // Generate a random token

    // Store user data and verification token in session
    $_SESSION['user_data'] = [
        'username' => $username,
        'password' => $password,
        'email' => $user_Email,
        'otp' => $otp
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
        $mail->setFrom('sampadroykoushik01@gmail.com', 'Unicircle');
        $mail->addAddress($user_Email);
        $mail->isHTML(true);
        $mail->Subject = 'Registration Verification for  Unicircle';
        $mail->Body = '<p>Thank you for registering for  Unicircle.</p>
        <p>Your OTP is: ' . $otp . '</p>
        <p>Please enter this OTP to complete your registration.</p>
        <p>Thank you...</p>';
;

        // Send email
        $mail->send();
      echo $otp;
        // Redirect to a page indicating that a verification email has been sent
        header("Location: otp_verify.html");
        exit();
    } catch (Exception $e) {
        // Display any exceptions
        echo "Error: " . $e->getMessage();
    }
}

?>
