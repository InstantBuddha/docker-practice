<?php
function verifyInstallation()
{
    if (extension_loaded('mysqli')) {
        echo "MySQLi extension is enabled.";
    } else {
        echo "MySQLi extension is not enabled.";
    }
}

?>