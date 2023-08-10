<?php
    function isThereTable ($connection, $tableName){
        $sql = "SHOW TABLES LIKE '$tableName'";
        if ($connection->query($sql)->num_rows > 0) {  
            echo "Table '$tableName' exists.\n";      
            return true;
        }
        else {
            echo "Table '$tableName' doesn't exist.\n";      
            return false;
        }
    }
?>