<?php
// 
//
/**
 * setting up database connection via xamp
 */
$username = 'cs4640user';
$password = 'henway123';
$host = 'localhost:3306';
$dbname = 'secretDictator';

$dsn = "mysql:host=$host;dbname=$dbname";

/**
 * connect to the data base 
 */
/** connect to the database **/
try 
{
   $db = new PDO($dsn, $username, $password);   
   //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "<p>You are connected to the database</p>";
}
catch (PDOException $e)     // handle a PDO exception (errors thrown by the PDO library)
{
   // Call a method from any object, 
   // use the object's name followed by -> and then method's name
   // All exception objects provide a getMessage() method that returns the error message 
   $error_message = $e->getMessage();        
   echo "<p>An error occurred while connecting to the database: $error_message </p>";
}
catch (Exception $e)       // handle any type of exception
{
   $error_message = $e->getMessage();
   echo "<p>Error message: $error_message </p>";
}

?>