<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <title>Session Delete</title>
</head>
<body>
    <?php
        session_unset();
        session_destroy();

        echo "All session variables are now removed, and the session is destroyed.";
    ?>
</body>
</html>
