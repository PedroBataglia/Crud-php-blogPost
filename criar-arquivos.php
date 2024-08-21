<?php

$dbPath = __DIR__ . '/banco-artigos.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$pdo->exec('CREATE TABLE artigos (id INTEGER PRIMARY KEY, title TEXT, datetime TEXT, text TEXT, tipo TEXT);');
