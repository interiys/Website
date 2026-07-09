<?php
require "db.php";
$email = $_POST["email"];
$name = $_POST["name"];
$password = hash("sha256",$_POST["password"].$salt);

$stmt = $sql->prepare("SELECT * FROM users WHERE name = ? OR email = ?");
$stmt->bind_param("ss", $name, $email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows==0){
    $stmt = $sql->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();
    $_SESSION['user_email'] = $email;
    $_SESSION['user_name'] = $name;
}
$stmt->close();
header('Location: ' . $_SERVER['HTTP_REFERER']);