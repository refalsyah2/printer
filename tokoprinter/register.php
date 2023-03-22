<?php

require 'functions.php';

if(isset($_POST["submit"])){
    if(register($_POST) > 0){
        echo "
        <script type = 'text/javascript'>
            alert('Data Berhasil Ditambahkan');
            window.location='customer/index.php'
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
    <title>Document</title>
</head>
<body>
<div class="box">
        <h2>Register</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="nama_lengkap">Nama Lengkap</label> <br> <br>
            <input type="text" name="nama_lengkap" id="nama_lengkap"> <br> <br>

            <label for="username">Username</label> <br> <br>
            <input type="text" name="username" id="username"> <br> <br>

            <label for="password">Password</label> <br> <br>
            <input type="password" name="password" id="password"> <br> <br>
            
            <input type="hidden" name="roles" value="Customer">
            <button type="submit" name="submit">Tambah Data</button>||
            <a href="login.php">Kembali Ke awal</a> 
        </form>
    </div>
</body>
</html>