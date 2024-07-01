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

        $sql = "DELETE FROM contacts WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            header("Location: ex1.php");
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    $conn->close();
