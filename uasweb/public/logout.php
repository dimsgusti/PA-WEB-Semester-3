
<?php 

session_start();
session_unset();
session_destroy();

echo 'Anda berhasil logout';
header("Location: ../index.php");
exit();
?>