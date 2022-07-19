<?php
require_once 'config/koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

//simpan ke db
// INSERT INTO namatable VALUES ('value', .....);
// INSERT INTO namatable (kolom, ....) VALUES (....)

$simpan = mysqli_query($con, "INSERT INTO mahasiswa VALUES ('$nim','$nama','$jurusan','$alamat')");

if ($simpan) {
    echo "<script>
            alert('Data Berhasil ditambahkan');
            window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
            alert('terjadi kesalahan');
            window.location.href = 'index.php';
    </script>";
}
