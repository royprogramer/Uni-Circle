<?php

session_start();
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "db_conn.php";
    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
  

  // Prepare and execute a SQL query to check the credentials
  $stmt = $conn->prepare('SELECT * FROM user_table WHERE username = ?');
  $stmt->bind_param('s', $username);
  $stmt->execute();

  // Get the result
  $result = $stmt->get_result();
  

  // Check if a user with the entered username exists
  if ($result->num_rows > 0) {
      // Fetch the user's data
      $row = $result->fetch_assoc();

      // Verify the entered password against the stored hash
      if ($row['username']=$username && password_verify($password, $row['password'])) {
          // Authentication successful, set session variables
         // $_SESSION["username"] = $username;
         $_SESSION['loggedin'] = true;

          // Redirect to the welcome page
          header("Location: homePage.php");
          exit();
      } else {
          // Authentication failed, display an error message
          echo "Invalid password.";
      }
  } else {
      // Authentication failed, display an error message
      echo "User not found.";
  }

  // Close the database connection
  $stmt->close();
  $conn->close();
}
?>
