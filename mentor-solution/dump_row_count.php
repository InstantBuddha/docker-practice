<?php

declare(strict_types=1);

require_once 'db.php';

echo "'Hello world!' count in foo: " . connectToDb()->query("SELECT count(*) FROM foo")->fetch()["count"] . PHP_EOL;