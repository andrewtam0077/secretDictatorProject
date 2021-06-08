<?php

/**
 * setting up database connection via xamp
 */
$username = 'cs4640user';
$password = 'henway123';
$host = 'localhost:3306';
$dbname = 'secretDictator';

$dsn = "mysql:host=$host;dbname=$dbname";
$db = "";

/**
 * connect to the data base 
 */
try {
    $db = new PDO($dsn, $username, $password);
    echo "<p>You are connected to the database</p>";
} catch(Exception $e) {
    $error_message = $e->getMessage();
    echo "<p>An error occured while connecting to the database: $error_message </p>";
}


?>