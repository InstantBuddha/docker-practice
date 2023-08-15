<?php
function testConnection() {
    $host = 'mysql-container'; // This is the container name
    $port = 3306;              // MySQL default port
    $user = 'myuser';          // MySQL user (set in the Dockerfile)
    $password = 'mypassword';  // MySQL password (set in the Dockerfile)
    $database = 'mydb';        // MySQL database (set in the Dockerfile)

    $connection = new mysqli($host, $user, $password, $database, $port);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    echo "Connected successfully!";
}
?>
