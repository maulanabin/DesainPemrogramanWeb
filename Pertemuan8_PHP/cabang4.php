<!DOCTYPE html>
<html>
<head>
    <title>Percabangan Switch Case</title>
</head>
<body>
    <?php 
        $tujuan = "Malang";
        echo "Mau main ke mana? " . $tujuan . "<br>";
        echo "<br> Pesan: ";
        switch($tujuan) {
            case "Batu":
                echo "<b>Jangan lupa bawa jaket</b>";
                break;
            case "Bandung":
                echo "<br>Awas kalau belanja lapar mata</br>";
                break;
            case "Bali":
                echO "<br>Pakai sunblock SPF 50</br>";
                break;
            default:
                echo "<br>Ya sudah belajar saja</br>";
        }
    ?>
</body>
</html>