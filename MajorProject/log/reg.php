<?php
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
//echo $fullname; echo $username; echo $password;
//die;
require '../db/config.php';
$sql = "insert into users(fullname,username,password)
        values('$fullname','$username','$password')";

mysqli_query($connect,$sql);

$sql = "select id from users where username = '$username'";
$result = mysqli_query($connect,$sql);

$id = mysqli_fetch_array($result)['id'];

mysqli_query($connect,$sql);
session_start();
$_SESSION['id'] = $id;
$_SESSION['fullname'] = $fullname;
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

header('location: ../HomePage.php');
mysqli_close($connect);
?>