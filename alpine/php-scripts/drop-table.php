<?php
include_once "is-there-table.php";

function dropTableWrapper($host, $user, $password, $database)
{
    $tableName = "myHelloWorlds";
    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    function dropTable($connection, $tableName)
    {
        $sql = "DROP TABLE $tableName";
        if ($connection->query($sql) === TRUE) {
            echo "Table '$tableName' dropped successfully!<br>";
        } else {
            echo "Error dropping table: " . $connection->error;
        }
    }

    if (isThereTable($conn, $tableName)) {
        dropTable($conn, $tableName);
    }

    $conn->close();
}

?>