<!DOCTYPE html>
<html>
<head>
    <title>Test connection</title>
</head>
<body>
    <h1>Php practice new</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include_once "php-scripts/verify-installation.php";
        include_once "php-scripts/simple-echo.php";
        include_once "php-scripts/test-connection.php";
        include_once "php-scripts/add-hello-world.php";
        include_once "php-scripts/drop-table.php";

        if (isset($_POST['verifyInstallation'])) {
            verifyInstallation();
        }

        if (isset($_POST['simpleEcho'])) {
            simpleEcho();
        }

        if (isset($_POST['testConnection'])) {
            testConnection();
        }

        if (isset($_POST['addHelloWorld'])) {
            addHelloWorld();
        }

        if (isset($_POST['dropTable'])) {
            dropTableWrapper();
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
