<?php
function testConnection($host, $user, $password, $database, $port) {

    $connection = new mysqli($host, $user, $password, $database, $port);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    echo "Connected successfully!<br>";
}
?>
