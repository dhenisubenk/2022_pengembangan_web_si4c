<?php
require_once 'config/session.php';
require_once 'config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$pass = password_hash($password, PASSWORD_DEFAULT);

$simpan = mysqli_query($con, "INSERT INTO user (username, password, role) VALUES ('$username','$pass','$role')");

if ($simpan) {
    echo "<script>
                alert('Data Berhasil ditambahkan');
                window.location.href = 'user.php';
        </script>";
} else {
    echo "<script>
                alert('terjadi kesalahan');
                window.location.href = 'user.php';
        </script>";
}
