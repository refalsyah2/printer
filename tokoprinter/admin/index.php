<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
</head>
<body>
    <?php
        session_start();
            if($_SESSION['status']!='login'){   
                header('location:index.php?pesan=belum_login');
            }
    ?>
    <h1>Selamat Datang di Admin</h1>
    <a href="../index.php">Logout</a>
</body>
</html>