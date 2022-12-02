<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
            echo "<script>alert('Username/Password anda salah!')</script>";
		}
	}
?>

<link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Mango Phone Store</title>

<div class="navbar">
    <div class="navbarKiri">
        <ul>
            <span>
                <li><a href="index.php">Mango</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="public/products.php">Products</a></li>
                <li><a href="public/riwayat.php">Riwayat Pembelian</a></li>
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
                    echo '<li><a href="public/logout.php">Logout</a></li>';
                    else{
                        echo '<li><a href="public/login.php">Login</a></li>';
                    }
                ?>
            </span>
        </ul>
    </div>
</div>

<div class="landingPage">
    <div class="welcome">
        <div>
            <img src="image/xphone1pro.png" alt="xphone1pro" id="imageIndex">
        </div>
        <div class="welcome1">
            <img src="image/Logo.png" alt="logo" width="50px">
            <h3>xPhone 1 Pro</h3>
            <h2>Its time to be "PRO"</h2>
            <h3>The one and only best camera on your hand</h3>
            <h3>Never lasting battery life</h3>
            <h3>Security on the top</h3><br><br><br><br><br><br>
            <div class="buy">
                <a href="public/products.php">Buy now</a>
            </div>
        </div>
    </div>
    <a href="public/aboutme.php">
    <div class="aboutContainer">
        <img src="https://cdn.eraspace.com/pub/media/wysiwyg/ibox/Banner_iBox_Tentang_Kami_1396x298px_20_Juli_2020_.jpg" alt="aboutmeBanner" width="100%">
    </div>
    </a>
</div>



<div class="footer">
    <div class="info">
        <div class="infoKiri">
            <p>Mango Phone Store adalah Official Store terkemuka di Dunia yang mengkhususkan diri dalam<br> produk-produk xPhone dan berbagai macam software lainnya.</p>
            <p>Jika Anda ingin bantuan atau memiliki masukan, silahkan hubungi kami: <br>Jam 9:00 - 18:00 WITA (Kecuali hari libur nasional)</p>
            <p>Email : mangophonecare@gmail.com</p>
        </div>
        <div class="infoKanan">
            <p>Kami menerima pembayaran : </p>
            <ul>
                <li>GOPAY</li>
                <li>OVO</li>
                <li>VISA</li>
                <li>MASTER CARD</li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>COPYRIGHT 2022 MANGO. ALL RIGHTS RESERVED.</p>
    </div>
</div>
