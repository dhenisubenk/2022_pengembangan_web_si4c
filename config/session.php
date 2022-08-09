<?php
if (empty($_SESSION['web_si4c_user'])) {
    echo "<script>
        alert('Anda belum login');
        window.location.href = 'login.php';
    </script>";
    exit();
}
