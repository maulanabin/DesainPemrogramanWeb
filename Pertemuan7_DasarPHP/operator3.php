<!DOCTYPE html>
<html>
<head>
    <title>Operator PHP</title>
</head>
<body>
    <?php 
        $a = true;
        $b = false;

        echo "Nilai a AND b adalah "; var_dump($a AND $b);
        echo "<br> Nili a OR b adalah "; var_dump($a OR $b);
        echo "<br> Nilai a XOR b adalah "; var_dump($a XOR $b);
        echo "<br><br> Nilai a && b adalah "; var_dump($a && $b);
        echo "<br> Nilai a || b adalah "; var_dump($a || $b);
        echo "<br> Nilai !a || b adalah "; var_dump(!$a || $b);
    ?>
</body>
</html>