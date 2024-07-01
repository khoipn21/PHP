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
        $ids = $_POST["ids"];
        $ids_array = explode(",", $ids);

        foreach ($ids_array as $id) {
            $sql = "DELETE FROM contacts WHERE id='$id'";
            $conn->query($sql);
        }

        header("Location: ex1.php");
    }

    $conn->close();
