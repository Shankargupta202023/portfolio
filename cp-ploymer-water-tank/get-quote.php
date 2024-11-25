<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Simple form validation
    if (!empty($name) && !empty($email)) {
        // Insert form data into MySQL database (assuming connection is established)
        $conn = new mysqli("localhost", "root", "", "cp_polymer_db");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO quotes (name, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $email);

        if ($stmt->execute()) {
            echo "Thank you for requesting a quote!";
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
