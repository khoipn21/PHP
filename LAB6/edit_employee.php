<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contacts_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];

        $sql = "UPDATE contacts SET name='$name', email='$email', address='$address', phone='$phone' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            header("Location: ex1.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    $conn->close();
