<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contacts_db";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO contacts (name, email, address, phone) VALUES ('$name', '$email', '$address', '$phone')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header('Location: ex1.php');