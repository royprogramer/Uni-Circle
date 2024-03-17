<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            
            background-image: linear-gradient(120deg, #2a0a72 12%, #009ffd 71%);
            font-family: Arial, sans-serif; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            text-align: center;
        }
    </style>
</head>
<body>
     
    <form action="register.php" method="post">
        <h2>Register</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Register"><br><br>
        
        <button><a href="index.php">Login</a></button>
        
   
    </form>
</body>
</html>
<?php

try{
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    include "db_conn.php";
    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

  // Prepare and execute a SQL query to insert the new user
    $stmt = $conn->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $stmt->store_result();
    // Check if the query was successful
    if ($stmt->affected_rows > 0) {
        // Registration successful, redirect to the login page
        header("Location: index.php");
        exit();
    } else {
        // Registration failed, display an error message
        echo "An error occurred.";
    }

  // Close the database connection
  $stmt->close();
  $conn->close();
}
}
catch(Exception $e){
    //more elegant
    echo "". $e->getMessage();
    
}
    
?>