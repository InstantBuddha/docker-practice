<?php
include_once "is-there-table.php";

function addHelloWorld($host, $user, $password, $database)
{
    $tableName = "myHelloWorlds";
    $message = "Hello World!";

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    function createTable($connection, $tableName)
    {
        $sql = "SHOW TABLES LIKE '$tableName'";
        $sql = "CREATE TABLE $tableName (
        id INT AUTO_INCREMENT PRIMARY KEY,
        message VARCHAR(255) NOT NULL
    )";

        if ($connection->query($sql) === TRUE) {
            echo "Table '$tableName' created successfully!<br>";
        } else {
            echo "Error creating table: " . $connection->error . "<br>";
            $connection->close();
            exit;
        }

    }

    function addMessage($connection, $tableName, $message)
    {
        $sql = "INSERT INTO $tableName (message) VALUES ('$message')";

        if ($connection->query($sql) === TRUE) {
            echo "New entry added successfully!<br>";
            showTables($connection, $tableName);
        } else {
            echo "Error adding entry: " . $connection->error . "<br>";
        }
    }

    function showTables($connection, $table)
    {
        $sql = "SELECT * FROM $table";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            echo "<br>All entries in the table:<br>";
            while ($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"] . " - Message: " . $row["message"] . "<br>";
            }
        } else {
            echo "<br>No entries found in the table.<br>";
        }
    }

    if (!isThereTable($conn, $tableName)) {
        createTable($conn, $tableName);
    }
    addMessage($conn, $tableName, $message);

    $conn->close();
}

?>