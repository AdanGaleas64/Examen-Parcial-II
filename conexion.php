<?php
$pdo = new PDO("mysql:dbname=world;host=127.0.0.1:3308","root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
