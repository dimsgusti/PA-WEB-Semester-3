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

<div class="landingPage">
    <div class="welcome">
        <div>
            <img src="../image/Logo.png" alt="xphone1pro" id="imageIndex">
        </div>
        <div class="welcome1">
            <h3>Tentang Mango Phone Store</h3>
            <p>Mango Phone adalah salah satu brand smartphone terbaik untuk sekarang.</p>
            <p>Mango Phone menawarkan smartphone dengan harga murah tetapi memberikan fitur yang luar biasa kepada pelanggannya</p>
            <p>Mango Phone juga menggunakan bahan bahan yang didapat dari sampah daur ulang untuk tetap menjaga kelestarian bumi kita</p>
        </div>
    </div>
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