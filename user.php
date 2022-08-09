<?php
require_once 'config/koneksi.php';
require_once 'config/session.php';
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
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#formMahasiswa">
                    Tambah User
                </button>
                <div class="card">
                    <div class="card-header">
                        Data User
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = mysqli_query($con, "SELECT * FROM user");
                                while ($row = mysqli_fetch_array($sql)) {
                                    echo "<tr>
                                        <td>$no</td>
                                        <td>$row[username]</td>
                                        <td>$row[role]</td>
                                        <td>
                                            <a href='' class='btn btn-sm btn-warning'>Edit</a>
                                            <a href='' class='btn btn-sm btn-danger' onclick=\"return confirm('Hapus Data?')\">Delete</a>
                                        </td>
                                    </tr>";

                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="formMahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="user_simpan.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-2">
                            <label for="" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Role</label>
                            <select name="role" id="" class="form-select">
                                <option>Admin</option>
                                <option>User</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>