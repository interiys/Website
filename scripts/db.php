<?php
session_start();
$salt = "MY_SALT";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$port = 3306;

$sql = new mysqli($servername, $username, $password, $dbname, $port);