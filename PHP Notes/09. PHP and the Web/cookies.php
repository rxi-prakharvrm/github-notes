<?php

$name = "some_name";
$value = 100;
$expiration = time() + (60*60*24*7);
setcookie($name, $value, $expiration);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['some_name'])) {
        $name = $_COOKIE['some_name'];
        echo $name;
    } else {
        $name = "";
    }
    ?>
</body>
</html>