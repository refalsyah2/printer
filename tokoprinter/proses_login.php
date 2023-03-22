<?php
session_start();
// include koneksi
include 'functions.php';

// menangkap data yang ada di form
$username = $_POST['username'];
$password = $_POST['pass'];

// menginput database
$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");


$cek = mysqli_num_rows($login);

// menghitung jumlah data yang ditemukan

if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['roles']=="Admin"){
 
	
		$_SESSION['Admin'] = $username;
		$_SESSION['status'] = "login";
		
		header("location:admin/index.php");
 
	}else if($data['roles']=="Customer"){

		$_SESSION['Customer'] = $username;
		$_SESSION['status'] = "login";
	
		header("location:customer/index.php");
 

 
	}else{
 
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>