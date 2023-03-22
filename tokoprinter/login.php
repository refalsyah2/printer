<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <h3>Silahkan Login</h3>
    <table> 
    <form action="proses_login.php" method="post">
        <tr>
            <td>
                <label for="username">Username</label>
            </td>
            <td>
                <input type="text" name="username">
            </td>
        </tr>
        <tr>
            <td>
                <label for="pass">Password</label>
            </td>
            <td>
                <input type="password" name="pass">
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="login"></td>
            <td><a href="register.php">Register</a></td>
        </tr>

    </form>
    </table>
</body>
</html>