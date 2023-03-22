<?php 

// panggil koneksi
require 'koneksi.php';

// deklarasi data data yang akan di input
$nama_lengkap = $_POST["nama_lengkap"];
$username = $_POST["username"];
$password = $_POST["password"];
$roles = $_POST["roles"];

// bikin query sql
$query = mysqli_query($conn, "INSERT INTO user VALUES(NULL, '$nama_lengkap', '$username', '$password', '$roles')");

// bikin kondisi
if($query){
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

?>