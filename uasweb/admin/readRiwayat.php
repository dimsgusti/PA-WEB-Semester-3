<link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">

<?php
session_start();

include '../database/connection.php';
$lihat = mysqli_query($conn, "SELECT * FROM riwayat");
$riwayat = [];
while ($row = mysqli_fetch_assoc($lihat)){
    $riwayat[] = $row;
}
?>

<div id="adminCreateNavbar">
    <?php echo "Waktu sekarang " . date("h:i:sa"); ?>
    <h3>Lihat data</h3>
</div>

<div class="navbarTengah">
    <a href="../admin/admin.php" style="color:black;" id="kembaliAdmin">Kembali</a>
</div>

<div class="readForm">
    <table class="table">
        <thead class="thead">
            <tr>
                <th>No</th>
                <th>ID Pembayaran</th>
                <th>ID Produk</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Kode Pos</th>
                <th>Telepon</th>
                <th>Nomor MasterCard</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach($riwayat as $mng) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $mng["id_pembayaran"]; ?></td>
                <td><?php echo $mng["id_hp"]; ?></td>
                <td><?php echo $mng["username"]; ?></td>
                <td><?php echo $mng["nama_lengkap"]; ?></td>
                <td><?php echo $mng["alamat"]; ?></td>
                <td><?php echo $mng["kodepos"]; ?></td>
                <td><?php echo $mng["telp"]; ?></td>
                <td><?php echo $mng["mastercard"]; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
</div>
