<?php
//db details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'location_db';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
// asignar utf-8 /
 if (!$db->set_charset("utf8")) {
     printf("Error loading character set utf8: %s\n", $mysqli->error);
     exit();
 }
?>