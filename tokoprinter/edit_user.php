<?php

require 'functions.php';

$id = $_GET["id"];
$user = query("SELECT * FROM user WHERE id_user = '$id'")[0];
if(isset($_POST["submit"])){
    if(updateuser($_POST) > 0){
        echo "
        <script type = 'text/javascript'>
            alert('Data Berhasil DiUpdate');
            window.location='index.php'
        </script>
    ";
    }else{
        echo "
        <script type = 'text/javascript'>
            alert('Data Gagal Diedit');
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
        <h2>Edit Data User</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_user" value="<?= $user["id_user"]; ?>">
            <label for="nama_lengkap">Nama Lengkap</label> <br> 
            <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?= $user['nama_lengkap'];?>"> <br> <br>

            <label for="username">Username</label> <br>
            <input type="text" name="username" id="username" value="<?= $user['username'];?>"> <br> <br>

            <label for="password">Password</label> <br>
            <input type="password" name="password" id="password" value="<?= $user['password'];?>"> <br> <br>

            <label for="foto">Foto</label> <br>
            <input type="file" name="foto" id="foto" value="<?= $user['foto'];?>"> <br> <br>

            <input type="hidden" name="roles" value="<?= $user['roles'];?>">
            <button type="submit" name="submit">Tambah Data</button>||
            <a href="index.php">Kembali Ke awal</a>
        </form>
    </div>
</body>
</html>
<html>