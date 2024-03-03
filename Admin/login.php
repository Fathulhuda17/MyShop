<?php
session_start ();
$koneksi=new mysqli("localhost","root","","myshop");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | MyShop</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
	<div class="box-login">
		<h2>Login</h2>
		<form action="" method="POST">
			<input type="text" name="user" placeholder="Username" class="input-control">
			<input type="password" name="pass" placeholder="Password" class="input-control">
			<input type="submit" name="submit" value="Login" class="btn">
		</form>
		<?php 
			if(isset($_POST['submit'])){
				$user=$_POST["user"];
            	$pass=$_POST["pass"];
				$ambil = $koneksi->query("SELECT * FROM tb_admin WHERE username='$user'
				AND password = '$pass'");

			$akunyangcocok = $ambil->num_rows;
            if (  $akunyangcocok ==1) {
                $akun = $ambil->fetch_assoc();
                $_SESSION["tb_admin"] = $akun;
					echo '<script>location="dashboard.php"</script>';
				}else{
					echo '<script>alert("Username atau password Anda salah!")</script>';
				}


			}
		?>
	</div>
</body>
</html>