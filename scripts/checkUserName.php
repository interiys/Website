<?php
require "db.php";
$name = $_GET["name"];

$stmt = $sql->prepare("SELECT * FROM users WHERE name = ?");
$stmt->bind_param("s", $name);
$stmt->execute();
$result = $stmt->get_result();
echo $result->num_rows;
$stmt->close();