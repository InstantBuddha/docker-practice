<?php
include "is-there-table.php";

$servername = "localhost";
$username = "testUser";
$password = "testPassword1234";
$dbname = "test_database";
$tableName = "myHelloWorlds";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function dropTable($connection, $tableName) {
    $sql = "DROP TABLE $tableName";
    if ($connection->query($sql) === TRUE) {
        echo "Table '$tableName' dropped successfully!\n";
    } else {
        echo "Error dropping table: " . $connection->error;
    }
}

if (isThereTable($conn, $tableName)){
    dropTable($conn, $tableName);
}

$conn->close();
?>