<?php
//DB details
$dbHost = 'us-cdbr-azure-southcentral-f.cloudapp.net';
$dbUsername = 'bc65d90668937d';
$dbPassword = 'd6b39721';
$dbName = 'base_a';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
} 
?>
