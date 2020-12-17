<?php

$mysqli = new mysqli("lab2", "root", "root", "php_shtol");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

