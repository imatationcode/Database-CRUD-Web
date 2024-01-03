<?php

$host = "localhost"; 
$username = "root"; //  username
$password = ""; //  password
$database = "softmonkemp"; //  database name


$conn = new mysqli($host, $username, $password, $database);
 
if (!$conn) 
    {
        die("Connection failed: " . my_sqli_error($conn));
    }

?>
