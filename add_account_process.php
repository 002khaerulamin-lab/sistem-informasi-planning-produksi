<?php
require 'koneksi.php';
session_start();

// PROSES 1: TAMBAH AKUN
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $level    = $_POST['level'];

    $query = "INSERT INTO akun (username, password, level) VALUES ('$username', '$password', '$level')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Akun $username berhasil ditambahkan!');
                window.location.href = 'add_account.php';
              </script>";
    } else {
        echo "Gagal Tambah: " . mysqli_error($conn);
    }
}

// PROSES 2: HAPUS AKUN
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    $query = "DELETE FROM akun WHERE id = '$id'";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Akun berhasil dihapus!');
                window.location.href = 'add_account.php';
              </script>";
    } else {
        echo "Gagal Hapus: " . mysqli_error($conn);
    }
}
?>