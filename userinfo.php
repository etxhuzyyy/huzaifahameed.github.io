<?php
$user_name = $_POST['name'];
$user_email = $_POST['email'];
$user_phone = $_POST['phone'];
$user_comments = $_POST['comments'];

$conn = mysqli_connect("localhost", "root", "", "user");
$sql = "INSERT INTO userinfo(name, email, phone, comments) VALUES ('{$user_name}','{$user_email}','{$user_phone}','{$user_comments}')";

$result = mysqli_query($conn, $sql);

header("Location: http://localhost/huzaifahameed/index.php");

mysqli_close($conn);
?>