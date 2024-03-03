<?php
session_start ();
$koneksi=new mysqli("localhost","root","","myshop");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar | MyShop</title>
	<link rel="stylesheet" type="text/css" href="Admin/css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-daftar">
	<div class="box-daftar">
		<h2>Daftar</h2>
		<form action="" method="POST">
            <input type="text" name="nama" placeholder="Nama" class="input-control" required>
			<input type="text" name="username" placeholder="Username" class="input-control"required>
            <input type="email" name="email" placeholder="Email" class="input-control"required>
			<input type="text" name="password" placeholder="Password" class="input-control"required>
            <input type="text" name="telepon" placeholder="Telepon" class="input-control"required>
            <textarea class="form-control" name="alamat" placeholder = "Alamat"required></textarea>               
            <button class="btn btn-primary" name="daftar">Daftar</button>
                                  
                            </form>
                            <?php 
                            if(isset($_POST["daftar"])){
                                $nama=$_POST["nama"];
                                $username=$_POST["username"];
                                $email=$_POST["email"];
                                $password=$_POST["password"];
                                $telepon=$_POST["telepon"];
                                $alamat=$_POST["alamat"];
                               

                                $ambil=$koneksi->query("SELECT*FROM pelangggan WHERE username='$username'");
                                $yangcocok = $ambil->num_rows;
                                if($yangcocok==1){
                                    echo "<script>alert('email sudah digunakan');</script>";
                                    echo "<script>location='daftar.php';</script>";
                                }
                                else{
                                   $koneksi->query("INSERT INTO pelangggan(pelanggan_name,username,
                                    pelanggan_email,password,pelanggan_telp,pelanggan_address) VALUES ('$nama',
                                    '$username','$email','$password','$telepon','$alamat')");

                                    echo "<script>alert('pendaftaran sukses, silahkan login');</script>";
                                    echo "<script>location='login.php';</script>";
                                }
                            }
                            
                            ?>