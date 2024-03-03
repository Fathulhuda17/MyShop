<?php 
	$koneksi=new mysqli("localhost","root","","myshop");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MyShop</title>
	<link rel="stylesheet" type="text/css" href="Admin/css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container">
			<h1><a href="home.php">MyShop</a></h1>
		</div>
	</header>
    <section id="index">
<img src="https://img.freepik.com/free-vector/home-screen-concept-illustration_114360-4703.jpg?t=st=1708958450~exp=1708962050~hmac=4200b909cc97b4675a4118b23dbd2d3fa8af2173767e9baa20da0bf0d55ee946&w=740"/>
<div class="kolom">
<p class="deskripsi" >MyShop</p>
<h2> Tempat belanja terbaik</h2>
<p> Terima kasih sudah mengunjungi website kami</p>
<p><a href="login.php" class="tbl-pink">Login</a></p>
<br>
<p><a href="daftar.php" class="tbl-pink">Daftar</a></p>
</div>
    </section>