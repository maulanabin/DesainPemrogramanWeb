<!doctype html>
<html>
<head>
</head>
<body>
    <?php
        $rawString = "Welcome Birmingham Parent.
        Your replacement is a pleasure to have!";

        $malestr = str_replace("replacement", "son", $rawString);
        $femalstr = str_replace("replacement", "daughter", $rawString);

        echo "Son: ". $malestr. "<br>";
        echo "Daughter: ". $femalstr. "<br>";
    ?>

</body>
</html>