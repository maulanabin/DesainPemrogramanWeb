<!DOCTYPE html>
<html>
<head>
    <title>Operator PHP</title>
</head>
<body>
    <?php 
        $a = 4;
        $a += 3;
        echo "Hasil operasi penambahan 4 += 3 adalah = $a";
        $b = 4;
        $b -= 3;
        echo "<br>Hasil operasi pengurangan 4 -= 3 adalah = $b";
        $c = 4;
        $c *= 3;
        echo "<br>Hasil operasi perkalian 4 *= 3 adalah = $c";
        $d = 4;
        $d /= 3;
        echo "<br>Hasil operasi pembagian 4 /= 3 adalah = $d";
        $e = 4;
        $e %= 3;
        echo "<br>Hasil operasi modulus 4 %= 3 adalah = $e";
        $f = 4;
        $f .= 3;
        echo "<br>Hasil operasi concate 4 .= 3 adalah = $f";
    ?>
</body>
</html>