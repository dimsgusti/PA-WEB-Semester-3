<?php
require '../database/connection.php';
date_default_timezone_set('Etc/GMT-8');
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('Silahkan login terlebih dahulu!')</script>";
    echo "<script>window.location='../public/login.php'</script>";
}
?>

<link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">

<div class="navbar">
    <div class="navbarTengah">
        <ul>
            <span>
                <li>Halo</li>
            </span>
        </ul>
    </div>
</div>

<div class="dashboard">
    <div>
        <h3>Welcome to Mango Database Manager</h3>
    </div>
    <div class="adminOption">
        <ul>
            <li><a href="../admin/create.php" id="btnAdmin">Create</a></li>
            <li><a href="../admin/read.php" id="btnAdmin">Read</a></li>
            <li><a href="../admin/readRiwayat.php">Read Buyer History</a></li>
            <li><a href="../public/logout.php" id="btnAdmin">Logout</a></li>
        </ul>
    </div>
</div>