<?php
require_once 'config/koneksi.php';
require_once 'config/session.php';
$nim = $_GET['nim'];
$cari = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
$row = mysqli_fetch_array($cari);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <?php require_once 'config/menu.php'; ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Mahasiswa
                    </div>
                    <div class="card-body">
                        <form action="update_mhs.php" method="POST">
                            <div class="mb-2">
                                <label for="" class="form-label">NIM</label>
                                <input type="text" name="nim" class="form-control" value="<?= $row['nim'] ?>" readonly>
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?= $row['nama'] ?>">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Jurusan</label>
                                <select name="jurusan" id="" class="form-select">
                                    <option><?= $row['jurusan'] ?></option>
                                    <option>Sistem Informasi</option>
                                    <option>Teknik Informatika</option>
                                    <option>Manajemen Informatika</option>
                                    <option>Komputerisasi Akuntansi</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?= $row['alamat'] ?>">
                            </div>
                            <div class="mb-2">
                                <a href="mahasiswa.php" class="btn btn-secondary">Close</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>