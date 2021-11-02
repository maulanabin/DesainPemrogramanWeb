<!DOCTYPE html>
<html>
<head>
    <title>Perulangan Bersarang</title>
</head>
<body>
    <?php 
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 10; $j++) {
                echo "Ini perulangan ke ($i, $j)<br>";
            }
        }
    ?>
</body>
</html>