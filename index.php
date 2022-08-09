<?php
session_start();
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
                <div class="card">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos atque voluptate nostrum, repellendus recusandae, dolore consectetur necessitatibus illo reiciendis quo at minus, aspernatur ab iusto deleniti vitae asperiores. Natus, corporis!
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>