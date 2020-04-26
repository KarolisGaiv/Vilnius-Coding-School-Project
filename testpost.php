<?php
// Check if the user hit the submit button

    echo "Your name is {$_POST["email"]} and you are {$_POST["name"]} years old.";


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "3_grupes_projektas";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    // $date = mysqli_real_escape_string($conn, $_POST['date']);


    $sql = "INSERT INTO contact_requests (email, name, message) VALUES (?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "System error ";
    } else {
        mysqli_stmt_bind_param($stmt, "sss", $email, $name, $message);
        mysqli_stmt_execute($stmt);
    }

    $conn->close();
