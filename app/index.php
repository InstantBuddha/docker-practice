<!DOCTYPE html>
<html>
<head>
    <title>Test connection</title>
</head>
<body>
    <?php
    if (isset($_POST['btnClicked'])) {
        if (extension_loaded('mysqli')) {
            echo "MySQLi extension is enabled.";
        } else {
            echo "MySQLi extension is not enabled.";
        }
    }
    ?>

    <form method="post">
        <input type="submit" name="btnClicked" value="Check connection">
    </form>
</body>
</html>
