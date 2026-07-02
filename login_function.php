<?php
include 'koneksi.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username != "" && $password != "") {
    // Mencari di tabel akun
    $query = "SELECT * FROM akun WHERE username = '$username' AND password = '$password' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $data_akun = mysqli_fetch_assoc($result);
        
        // MENYIMPAN DATA KE SESSION (PENTING!)
        $_SESSION['username'] = $data_akun['username'];
        $_SESSION['level'] = $data_akun['level']; 
        
        header('location: index.php');
        exit();
    } else {
        header('location: login.php?pesan=gagal');
        exit();
    }
} else {
    header('location: login.php');
    exit();
}
?>