<?php
$db_hostname = 'localhost';
$db_name = 'elektro_store';
$db_username = 'root';
$db_password = '';

$conn_db = mysqli_connect($db_hostname, $db_name, $db_username, $db_password;

if(!$conn_db) {
    die("Connection Failed : " . mysqli_connect_error());
}