<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Input validation
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    if (empty($name) || empty($email) || empty($message)) {
        die("Error: All fields are required");
    }

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'contact', 3308);


    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("sss", $name, $email, $message);

    // Execute the statement
    $execVal = $stmt->execute();

    if ($execVal) {
        echo "Data Submitted Successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect or display an error message if someone tries to access this script directly
    echo "Error: Form not submitted";
}
?>
