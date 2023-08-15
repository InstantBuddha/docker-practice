<?php
include_once "is-there-table.php";

function dropTableWrapper()
{

    $servername = 'mysql-container';
    $username = "myuser";
    $password = "mypassword";
    $dbname = "mydb";
    $tableName = "myHelloWorlds";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    function dropTable($connection, $tableName)
    {
        $sql = "DROP TABLE $tableName";
        if ($connection->query($sql) === TRUE) {
            echo "Table '$tableName' dropped successfully!\n";
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