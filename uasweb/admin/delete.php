<?php 
    require '../database/connection.php';

    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM produk WHERE id_hp = $id");

    if($result){
        echo "
        <script>
            alert('Data telah berhasil dihapus');
            document.location.href = '../admin/read.php';
        </script>";
    } else{
        echo "
        <script>
            alert('Data gagal dihapus');
            document.locatin.href = '../admin/read.php';
        </script>";
    }
?>