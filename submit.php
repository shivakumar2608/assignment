<?php
include('config.php');

// Validate email format
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Validate age as a positive integer
function isValidAge($age) {
    return filter_var($age, FILTER_VALIDATE_INT) !== false && intval($age) > 0;
}


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["namee"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $dob = $_POST["dob"];

    // Validate input
    if (!isValidEmail($email)) {
        echo "Invalid email format";
    } elseif (!isValidAge($age)) {
        echo "Invalid age";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO users (namee, email, age, dob) VALUES ('$name', '$email', '$age', '$dob')";

        if ($conn->query($sql) === TRUE) {
            header("Location: display.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
