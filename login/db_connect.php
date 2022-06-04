<?php 
$host = "localhost";
$dbname = "webProject";
$user = "postgres";
$password = ""; 
$connection_string = "host={$host} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
?>
