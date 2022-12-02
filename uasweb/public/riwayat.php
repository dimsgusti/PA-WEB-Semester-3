<?php
require '../database/connection.php';
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>window.location='login.php'</script>";
}
$data = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM riwayat WHERE username = '$data'");
$riwayat = [];
while($row = mysqli_fetch_assoc($result)){
    $riwayat[] = $row;
}

?>

<link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Mango Phone Store</title>

<div class="navbar">
    <div class="navbarKiri">
        <ul>
            <span>
                <li><a href="../index.php">Mango</a></li>
                <li><a href="../index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="riwayat.php">Riwayat Pembelian</a></li>
            </span>
        </ul>
    </div>
    <div class="navbarKanan">
        <ul>
            <span>
                <?php
                    session_start();
                    error_reporting(0);
                    if($_SESSION['username'])
                    echo '<li><a href="logout.php">Logout</a></li>';
                    else{
                        echo '<li><a href="login.php">Login</a></li>';
                    }
                ?>
            </span>
        </ul>
    </div>
</div>

<div class="readForm" style="text-align: center;">
    <h1>Riwayat Pembelian</h1>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>ID HP</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Kode Pos</th>
                <th>Telepon</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach ($riwayat as $rw): ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $rw["id_hp"] ?></td>
                    <td><?php echo $rw["username"] ?></td>
                    <td><?php echo $rw["nama_lengkap"]; ?></td>
                    <td><?php echo $rw["alamat"]; ?></td>
                    <td><?php echo $rw["kodepos"]; ?></td>
                    <td><?php echo $rw["telp"]; ?></td>
                    <td>Belum terkonfirmasi</td>
                </tr>
            </tbody>
        </table>
    <?php $i++; endforeach; ?>
</div>