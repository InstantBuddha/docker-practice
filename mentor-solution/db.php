<?php

declare(strict_types=1);

function connectToDb(): PDO
{
    $connectionString = sprintf("pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
        'db',
        '5432',
        'mentoring_app_database',
        'postgres',
        'postgres',
    );

    $pdo = new PDO($connectionString);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query("CREATE TABLE IF NOT EXISTS foo (bar varchar(20));");

    return $pdo;
}