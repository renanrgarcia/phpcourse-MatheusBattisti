<?php

$host = "database-container";
$user = "root";
$pass = "php_mysql_pass";
$db = "dao-test";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);