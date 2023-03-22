<?php

require 'functions.php';

if(isset($_POST["submit"])){
    if(tambahuser($_POST) > 0){
        echo "
        <script type = 'text/javascript'>
            alert('Data Berhasil Ditambahkan');
            window.location='index.php'
        </script>
    ";
    }else{
        echo "
        <script type = 'text/javascript'>
            alert('Data Gagal Ditambahkan');
            window.location='index.php'
        </script>
    ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah User</title>
</head>
<body>
    <div class="box">
        <h2>Tambah Data User</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="nama_lengkap">Nama Lengkap</label> <br> <br>
            <input type="text" name="nama_lengkap" id="nama_lengkap"> <br> <br>

            <label for="username">Username</label> <br> <br>
            <input type="text" name="username" id="username"> <br> <br>

            <label for="password">Password</label> <br> <br>
            <input type="password" name="password" id="password"> <br> <br>
            
            <label for="foto">Foto</label><br> <br>
            <input type="file" name="foto" id="foto"> <br> <br>

            <input type="hidden" name="roles" value="Customer">
            <button type="submit" name="submit">Tambah Data</button>||
            <a href="index.php">Kembali Ke awal</a> 
        </form>
    </div>
</body>
</html>
<html>