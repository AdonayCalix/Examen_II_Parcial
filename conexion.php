<?php
$conexion = new PDO('mysql:dbname=world;host=127.0.0.1:3307', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

