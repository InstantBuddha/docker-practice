<?php
function verifyInstallation()
{
    if (extension_loaded('mysqli')) {
        echo "MySQLi extension is enabled.<br>";
    } else {
        echo "MySQLi extension is not enabled.<br>";
    }
}

?>