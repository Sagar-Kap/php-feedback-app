<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'ninja');
define('DB_PASS', '37zD9H_!e)zRLTdl');
define('DB_NAME', 'php_dev');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die('Connection Failed ' . $conn->connect_error);
}
