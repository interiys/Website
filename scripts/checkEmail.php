<?php
require "db.php";
$email = $_GET["email"];

$stmt = $sql->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
echo $result->num_rows;
$stmt->close();