<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "deporte";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $fecha = date('Y-m-d H:i:s');
    $pesokilogramo = (int)$_POST['pesokilogramo'];

    $sql = "INSERT INTO `deporte`.`bicep`
    (`fecha`,
    `pesokilogramo`)
    VALUES
    ('" . $fecha . "',
    " . $pesokilogramo . ")";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
