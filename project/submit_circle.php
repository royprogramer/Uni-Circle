<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "db_conn.php"; // Include your database connection script

    // Get form data
    $circle_name = $_POST["circle_name"];
    // Handle file upload for circle image
    $circle_img = $_FILES["circle_img"]["name"]; // Assuming you're storing image paths in the database
    $university_name = $_POST["university_name"];
    // Handle file upload for university logo
    $university_logo = $_FILES["university_logo"]["name"]; // Assuming you're storing image paths in the database
    $category = $_POST["category"];
    $description = $_POST["circle_description"]; // Fix the variable name here

    // Prepare and execute a SQL query to check if the circle exists
    $stmt = $conn->prepare('SELECT * FROM circle_info WHERE circle_name = ?');
    $stmt->bind_param('s', $circle_name);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a circle with the entered name exists
    if ($result->num_rows > 0) {
        // Circle already exists, display an error message
        echo "Circle already exists.";
    } else {
        // Prepare and execute a SQL query to insert the circle info into the database
        $stmt = $conn->prepare('INSERT INTO circle_info (circle_name, circle_img, university_name, university_logo, category, description) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('ssssss', $circle_name, $circle_img, $university_name, $university_logo, $category, $description);
        
        if ($stmt->execute()) {
            // File Upload - Move uploaded files to desired location
            $circle_img_tmp = $_FILES["circle_img"]["tmp_name"];
            $university_logo_tmp = $_FILES["university_logo"]["tmp_name"];
            move_uploaded_file($circle_img_tmp, "uploads/" . $circle_img); // Assuming "uploads" is your upload directory
            move_uploaded_file($university_logo_tmp, "uploads/" . $university_logo); // Assuming "uploads" is your upload directory
            
            // Circle added successfully, redirect to a success page
            header("Location: successPage.html");
            exit();
        } else {
            // Error occurred while adding the circle, display an error message
            echo "Error: " . $conn->error;
        }
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
