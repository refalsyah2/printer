<?php

$conn = mysqli_connect('localhost', 'root', '', 'printer');

function query($query){
    global  $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambahuser($data){
    global $conn;

    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $roles = htmlspecialchars($data["roles"]);

    $query = "INSERT INTO user VALUES(NULL, '$nama_lengkap', '$username', '$password', '$foto','$roles')";
    move_uploaded_file($files, "image/".$foto);
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapususer($id){
    global $conn;

    $query = "DELETE FROM user WHERE id_user = '$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateuser($data){
    global $conn;

    $id = htmlspecialchars($data["id_user"]);
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $roles = htmlspecialchars($data["roles"]);

    if(empty($foto)){
        $query = "UPDATE user SET
        nama_lengkap = '$nama_lengkap',
        username = '$username',
        password = '$password',
        roles = '$roles' WHERE id_user = '$id'";

        mysqli_query($conn,$query);
    
        return mysqli_affected_rows($conn);
    }else{
        $query = "UPDATE user SET
        nama_lengkap = '$nama_lengkap',
        username = '$username',
        password = '$password',
        foto = '$foto',
        roles = '$roles' WHERE id_user = '$id'";
        move_uploaded_file($files, "image/".$foto);
        mysqli_query($conn,$query);
    
        return mysqli_affected_rows($conn);
    }
}

function register($data){
    global $conn;

    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $roles = htmlspecialchars($data["roles"]);

    $query = "INSERT INTO user VALUES(NULL, '$nama_lengkap', '$username', '$password', NULL, '$roles')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>