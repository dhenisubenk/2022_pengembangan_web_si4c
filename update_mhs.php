<?php
require_once 'config/koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

//UPDATE namatable SET kolom = value ..... WHERE .....

$simpan = mysqli_query($con, "UPDATE mahasiswa SET nama = '$nama', jurusan = '$jurusan', alamat = '$alamat' WHERE nim = '$nim'");

if ($simpan) {
    echo "<script>
            alert('Data Berhasil diubah');
            window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
            alert('terjadi kesalahan');
            window.location.href = 'index.php';
    </script>";
}
