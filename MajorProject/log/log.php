<?php
    require '../db/config.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from users
        where username = '$username' and  password = '$password'";
    $result = mysqli_query($connect,$sql);
        session_start();
        $each = mysqli_fetch_array($result);
        
        $id = $each['id'];
        $_SESSION['id'] = $id;
        $_SESSION['fullname'] = $each['fullname'];
        echo $_SESSION['id'];
        header('Location: ../HomePage.php');
mysqli_close($connect);
?>