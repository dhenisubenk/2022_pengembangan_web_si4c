<?php
session_start();
require_once 'config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)) {
    echo "<script>
                alert('Data tidak boleh kosong');
                window.location.href = 'login.php';
        </script>";
} else {
    #cek username
    $sql = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");
    $jml = mysqli_num_rows($sql); // baris yang dihasilkan dari query

    if ($jml > 0) {
        # username ada, cek password
        $data = mysqli_fetch_array($sql);
        # cek password
        if (password_verify($password, $data['password'])) {
            $_SESSION['web_si4c_user'] = $data['username'];
            echo "<script>
                    alert('Login Berhasil');
                    window.location.href = 'index.php';
            </script>";
        } else {
            echo "<script>
                    alert('Password salah');
                    window.location.href = 'login.php';
            </script>";
        }
    } else {
        # username tidak ada
        echo "<script>
                alert('Username salah');
                window.location.href = 'login.php';
        </script>";
    }
}
