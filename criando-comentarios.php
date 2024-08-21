<?php

$dbPath = __DIR__ . '../banco-comentarios.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$pdo->exec('CREATE TABLE comentarios (id INTEGER PRIMARY KEY, name TEXT, email TEXT, website TEXT, comment TEXT, video TEXT) ');
