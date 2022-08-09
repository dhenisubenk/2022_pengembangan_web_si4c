<?php
require_once 'config/koneksi.php';
require_once 'config/session.php';

$nim = $_GET['nim'];

$sql = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim = '$nim'");
if ($sql) {
    echo "<script>
            alert('Data Berhasil dihapus');
            window.location.href = 'mahasiswa.php';
    </script>";
} else {
    echo "<script>
            alert('terjadi kesalahan');
            window.location.href = 'mahasiswa.php';
    </script>";
}
