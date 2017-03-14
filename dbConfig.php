<?php
//db details
$dbHost = '104.196.100.35';
$dbUsername = 'dafego';
$dbPassword = 'mvjazar';
$dbName = 'locations_db';

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