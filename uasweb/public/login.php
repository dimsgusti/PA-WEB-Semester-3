<link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">

<title>Login Mango</title>

<div class="navbar">
    <div class="navbarTengah">
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


<div class="login">
    <form action="cek_login.php" method="POST">
        <div class="logForm">
            <h3>Login</h3>
            <hr>

            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
    
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" name="submit" class="logBtn">Login</button>
            <div class="reg"><p>Belum punya akun? <a href="../public/registration.php" style="color: black;">Registrasi</a></p>
        </div>
    </div>
</form>
</div>