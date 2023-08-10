<!DOCTYPE html>
<html>
<head>
    <title>Test connection</title>
</head>
<body>
    <?php
    if (isset($_POST['checkConnection'])) {
        if (extension_loaded('mysqli')) {
            echo "MySQLi extension is enabled.";
        } else {
            echo "MySQLi extension is not enabled.";
        }
    }

    if (isset($_POST['simpleEcho'])) {
        include_once "php-scripts/simple_echo.php";
        simpleEcho();
    }
    ?>

    <form method="post">
        <input type="submit" name="checkConnection" value="Check connection">
    </form>
    <form method="post">
        <input type="submit" name="simpleEcho" value="Simple Echo">
    </form>
</body>
</html>
