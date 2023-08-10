<!DOCTYPE html>
<html>
<head>
    <title>Test connection</title>
</head>
<body>
    <h1>Php practice 2</h1>
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
    ?>

    
    <form method="post">
        <input type="submit" name="simpleEcho" value="Simple Echo">
    </form>
    <form method="post">
        <input type="submit" name="verifyInstallation" value="Check connection">
    </form>
    <form method="post">
    <input type="submit" name="testConnection" value="Test MySQL Connection">
</form>

    
</body>
</html>