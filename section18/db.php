<?php

$host = "database-container";
$user = "root";
$pass = "php_mysql_pass";
$db = "daotest";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);