<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            background-color:#eee;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-2">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="">Nilai</label>
                                <input type="text" name="nilai" class="form-control">
                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn btn-primary" name="cetak">Cetak</button>
                            </div>
                        </form>
                    </div>
                </div>

                <?php
                    if (isset($_POST['cetak'])) 
                    {
                        
                        $nama = $_POST['nama'];
                        $nilai = $_POST['nilai'];

                        //$grade = $status = "";
                        $grade = "";
                        $status = "";
                        
                        
                ?>
                <div class="card mt-2">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td><?= $nama ?></td>
                            </tr>
                            <tr>
                                <th>Nilai</th>
                                <td>:</td>
                                <td><?= $nilai ?></td>
                            </tr>
                            <tr>
                                <th>Grade</th>
                                <td>:</td>
                                <td><?= $grade ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>:</td>
                                <td><?= $status ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <?php } ?>

            </div>
        </div>
    </div>    


    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>