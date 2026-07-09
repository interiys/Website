<?php
require "db.php";
$input = file_get_contents("php://input");
$data = json_decode($input, true);

$email = $data["email"];
$password = hash("sha256",$data["password"].$salt);

$stmt = $sql->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows==1){
    $user = $result->fetch_assoc();
    $_SESSION['user_email'] = $email;
    $_SESSION['user_name'] = $user['name'];
    echo 1;
}
else {
    echo 0;
}
$stmt->close();