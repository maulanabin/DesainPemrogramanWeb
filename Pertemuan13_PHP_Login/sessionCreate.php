<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <title>Session Create</title>
</head>
<body>
    <?php
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "cat";
        echo "Session variables are set.";
    ?>
</body>
</html>


