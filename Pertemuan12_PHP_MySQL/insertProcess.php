<?php
    include "myConnection.php";

    $name = $_GET["myname"];
    $address = $_GET["myaddress"];

    $query = "INSERT INTO student(name, address)
                VALUE('$name', '$address')";

    if (mysqli_query($connect, $query)) {
        echo "Data baru berhasil ditambahkan";
    } else {
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>

