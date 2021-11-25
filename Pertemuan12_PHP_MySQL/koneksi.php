<?php
    $hostname = "localhost";
    $username = "root";
    $pasword = "";

    $connect = mysqli_connect($hostname, $username, $pasword);

    if ($connect) {
        echo "Koneksi ke MySQL berhasil";
    } else {
        echo "Koneksi ke MySQL gagal";
    }
?>


