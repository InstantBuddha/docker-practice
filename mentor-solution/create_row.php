<?php

declare(strict_types=1);

require_once 'db.php';

connectToDb()->query(sprintf("INSERT INTO foo (bar) values ('%s');", 'Hello world!'));