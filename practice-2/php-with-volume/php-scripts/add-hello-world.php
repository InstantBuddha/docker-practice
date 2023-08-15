<?php
include_once "is-there-table.php";

function addHelloWorld()
{
    $servername = 'mysql-container';
    $username = "myuser";
    $password = "mypassword";
    $dbname = "mydb";
    $tableName = "myHelloWorlds";
    $message = "Hello World!";

    $conn = new mysqli($servername, $username, $password, $dbname);

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
            echo "Table '$tableName' created successfully!\n";
        } else {
            echo "Error creating table: " . $connection->error . "\n";
            $connection->close();
            exit;
        }

    }

    function addMessage($connection, $tableName, $message)
    {
        $sql = "INSERT INTO $tableName (message) VALUES ('$message')";

        if ($connection->query($sql) === TRUE) {
            echo "New entry added successfully!\n";
            showTables($connection, $tableName);
        } else {
            echo "Error adding entry: " . $connection->error . "\n";
        }
    }

    function showTables($connection, $table)
    {
        $sql = "SELECT * FROM $table";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            echo "\nAll entries in the table:\n";
            while ($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"] . " - Message: " . $row["message"] . "\n";
            }
        } else {
            echo "\nNo entries found in the table.\n";
        }
    }

    if (!isThereTable($conn, $tableName)) {
        createTable($conn, $tableName);
    }
    addMessage($conn, $tableName, $message);

    $conn->close();
}

?>