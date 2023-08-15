<!DOCTYPE html>
<html>
<head>
    <title>Test connection</title>
</head>
<body>
    <h1>Php practice new and modified</h1>
    <?php
    if (isset($_POST['verifyInstallation'])) {
        include_once "php-scripts/verify-installation.php";
        verifyInstallation();
    }

    if (isset($_POST['simpleEcho'])) {
        include_once "php-scripts/simple-echo.php";
        simpleEcho();
    }

    if (isset($_POST['testConnection'])) {
        include_once "php-scripts/test-connection.php";
        testConnection();
    }

    if (isset($_POST['addHelloWorld'])) {
        include_once "php-scripts/add-hello-world.php";
        addHelloWorld();
    }

    if (isset($_POST['dropTable'])) {
        include_once "php-scripts/drop-table.php";
        dropTableWrapper();
    }
    ?>

    
    <form method="post">
        <input type="submit" name="simpleEcho" value="Simple Echo">
    </form>
    <form method="post">
        <input type="submit" name="verifyInstallation" value="Check installation">
    </form>
    <form method="post">
    <input type="submit" name="testConnection" value="Test MySQL Connection">
    <form method="post">
    <input type="submit" name="addHelloWorld" value="Add hello world">
    <form method="post">
    <input type="submit" name="dropTable" value="Drop Table">
</form>

    
</body>
</html>