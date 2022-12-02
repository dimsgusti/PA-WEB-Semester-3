<link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">

<?php
    date_default_timezone_set('Etc/GMT-8');
    require '../database/connection.php';
    require 'functions.php';
    $pdo = pdo_connect_mysql();
    $msg = '';

    if (!empty($_POST)) {

        $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;

        $nama_hp = isset($_POST['nama_hp']) ? $_POST['nama_hp'] : '';
        $harga_hp = isset($_POST['harga_hp']) ? $_POST['harga_hp'] : '';
        $stok_hp = isset($_POST['stok_hp']) ? $_POST['stok_hp'] : '';
        $bulantahun = isset($_POST['bulantahun']) ? $_POST['bulantahun'] : '';
        $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : '';
    
        $stmt = $pdo->prepare('INSERT INTO produk VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$id, $nama_hp, $harga_hp, $stok_hp, $bulantahun, $gambar]);
        echo "<script>alert('Data berhasil di tambahkan!')</script>";
    }
?>

<div id="adminCreateNavbar">
    <?php echo "Waktu sekarang " . date("h:i:sa"); ?>
    <h3>Menu menambahkan data</h3>
</div>

<div class="kembaliAdmin">
    <a href="../admin/admin.php" style="color:black;" id="kembaliAdmin">Kembali</a>
</div>
<div class="adminCreate">
    <form action="" method="POST">
                <label for="">Nama HP</label>
				<input type="text" name="nama_hp" required>
                <label for="">Harga</label>
				<input type="number" name="harga_hp" required>
                <label for="">Stok</label>
				<input type="number" name="stok_hp" required>
                <label for="">Bulan dan tahun rilis</label>
                <input type="month" name="bulantahun" required>
                <label for="">Gambar</label>
                <input type="file" name="gambar" required>
		</table>
		<input class="logBtn" type="submit" name="submitForm">
	</form>
</div>