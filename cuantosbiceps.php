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

    $query = "select count(*) from deporte.bicep;";
    // $result = mysql_query($query); 
    $result = $conn->query($query);
    $row = $result->fetch_row();
    echo '#: ', $row[0];
    $conn->close();
?>
