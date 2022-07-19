<?php
require_once 'config/koneksi.php';

$nim = $_GET['nim'];

$sql = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim = '$nim'");
if ($sql) {
    echo "<script>
            alert('Data Berhasil dihapus');
            window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
            alert('terjadi kesalahan');
            window.location.href = 'index.php';
    </script>";
}
