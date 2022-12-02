<link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">

<?php
    require '../database/connection.php';

    $result = mysqli_query($conn, "SELECT * FROM produk");

    $produk = [];

    while($row = mysqli_fetch_assoc($result)){
        $produk[] = $row;
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
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Bulan Tahun Rilis</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach($produk as $mng) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $mng["nama_hp"]; ?></td>
                <td><?php echo $mng["harga_hp"]; ?></td>
                <td><?php echo $mng["stok_hp"]; ?></td>
                <td><?php echo $mng['bulantahun']; ?></td>
                <td><img src="../image/<?php echo $mng['gambar'] ?>" alt="xphone1" style="max-width: 50px;height: auto;"><br></td>
                <td>
                    <a href="update.php?id=<?php echo $mng["id_hp"]; ?>" onclick="return confirm('Yakin ingin mengubah?');" role="button" id="kembaliAdmin" name="update">Ubah</a>
                    <a href="delete.php?id=<?php echo $mng["id_hp"]; ?>" onclick="return confirm('Yakin ingin menghapus?');" role="button" id="kembaliAdmin">Hapus</a>
                </td>
            </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
</div>
