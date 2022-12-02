<?php

include '../database/connection.php';

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['regis'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
    $level = "user";

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
        $sql1 = "SELECT * FROM users WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password, level)
					VALUES ('$username', '$email', '$password', '$level')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registrasi anda berhasil silahkan login.')</script>";
                $username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
                header("location: login.php");
			} else {
				echo "<script>alert('Terjadi kesalahan silahkan coba lagi.')</script>";
			}
		} else {
			echo "<script>alert('Email/Username sudah digunakan silahkan coba lagi.')</script>";
		}

	} else {
		echo "<script>alert('Password tidak sama.')</script>";
	}
}

?>

<script>  
function validateemail()  
{  
var x=document.regis.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Alamat email salah silahkan coba lagi.");  
  return false;  
  }  
}  
</script> 

<link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">

<title>Register Mango</title>

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

<div class="registration">
    <form name="regis" action="" method="POST" onsubmit="return validateemail();">
        <div class="regForm">
            <h3>Register</h3>
            <hr>
            
            <label for="username">Username</label>
            <input type="text" name="username" id="username" max="25" min="3" required>
    
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>
    
            <label for="password">Password</label>
            <input type="password" name="password" id="password" min="3" max="55" required>
    
            <label for="cpassword">Konfirmasi</label>
            <input type="password" name="cpassword" id="cpassword" min="3" max="55" required>
    
            <button type="submit" name="regis" class="regBtn">Register</button>
            <div class="log"><p>Sudah punya akun? <a href="login.php" style="color: black;">Login</a></p></div>
        </div>
    </form>
</div>