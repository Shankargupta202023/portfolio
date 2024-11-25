<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Simple form validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Insert form data into MySQL database (assuming connection is established)
        $conn = new mysqli("localhost", "root", "", "cp_polymer_db");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            echo "Thank you for reaching out! We will get back to you shortly.";
        } else {
            echo "Error: " . $conn->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Please fill in all fields!";
    }
}
?>
