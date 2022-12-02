<?php
include '../database/connection.php';

SESSION_START();

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    if($data['level'] == "admin"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:../admin/admin.php");
    }else if($data['level']=="user"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";
        header("location:../index.php");
    } else{
        header("location:../index.php?pesan=gagal");
    }
} else{
    header("location:../index.php?pesan=gagal");
}

?>