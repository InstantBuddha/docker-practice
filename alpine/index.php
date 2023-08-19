<!DOCTYPE html>
<html>

<head>
    <title>Test connection</title>
</head>

<body>
    <h1>Php practice new</h1>
    <?php

    $host = getenv('MYSQL_HOST');
    $port = getenv('MYSQL_PORT') ?: 3306;
    $user = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    $database = getenv('MYSQL_DATABASE');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include_once __DIR__ . "/php-scripts/verify-installation.php";
        include_once __DIR__ . "/php-scripts/simple-echo.php";
        include_once __DIR__ . "/php-scripts/test-connection.php";
        include_once __DIR__ . "/php-scripts/add-hello-world.php";
        include_once __DIR__ . "/php-scripts/drop-table.php";


        if (isset($_POST['verifyInstallation'])) {
            verifyInstallation();
        }

        if (isset($_POST['simpleEcho'])) {
            simpleEcho();
        }

        if (isset($_POST['testConnection'])) {
            testConnection($host, $user, $password, $database, $port);
        }

        if (isset($_POST['addHelloWorld'])) {
            addHelloWorld($host, $user, $password, $database);
        }

        if (isset($_POST['dropTable'])) {
            dropTableWrapper($host, $user, $password, $database);
        }
    }
    ?>

    <form method="post">
        <input type="submit" name="simpleEcho" value="Simple Echo"><br>
        <input type="submit" name="verifyInstallation" value="Check installation"><br>
        <input type="submit" name="testConnection" value="Test MySQL Connection"><br>
        <input type="submit" name="addHelloWorld" value="Add hello world"><br>
        <input type="submit" name="dropTable" value="Drop Table"><br>
    </form>
</body>

</html>