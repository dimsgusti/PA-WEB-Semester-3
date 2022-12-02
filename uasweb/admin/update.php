<link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">

<?php  
require '../database/connection.php';
session_start();

if(isset($_POST['submitForm1'])){
    $id = $_GET['id'];
    $nama_hp = $_POST['nama_hp'];
    $harga_hp = $_POST['harga_hp'];
    $stok_hp = $_POST['stok_hp'];
    $bulantahun = $_POST['bulantahun'];

    $sql = "UPDATE produk SET nama_hp = '$nama_hp', harga_hp = '$harga_hp', stok_hp = '$stok_hp', bulantahun = '$bulantahun' WHERE id_hp = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo"<script>
        alert('Data berhasil diubah');
        document.location.href ='read.php';
        </script>";
    } else{
        echo"<script>
        alert('Data gagal diubah');
        document.location.href ='read.php';
        </script>";
    }
}
?>

<div class="navbarUpdate">
    <?php echo "Waktu sekarang " . date("h:i:sa"); ?>
    <h3>Menu mengubah data</h3>
    <a href="read.php" id="kembaliAdmin">Kembali</a>
</div>

<div class="adminCreate">
    <form action="" method="POST">
        <?php echo $produk['id_hp'] ?>
		<label for="">Nama HP : </label>
        <input type="text" name="nama_hp" value="<?php echo $produk['nama_hp'] ?>" required><br><br>

        <label for="">Harga : </label>
        <input type="number" name="harga_hp" value="<?php echo $produk['harga_hp'] ?>" required><br><br>

        <label for="">Stok : </label>
        <input type="number" name="stok_hp" value="<?php echo $produk['stok_hp'] ?>" required><br><br>

        <label for="">Bulan tahun rilis : </label>
        <input type="month" name="bulantahun" placeholder="1999-12"  value="<?php echo $produk['bulantahun'] ?>" required>

		<input type="submit" name="submitForm1">
	</form>
</div>