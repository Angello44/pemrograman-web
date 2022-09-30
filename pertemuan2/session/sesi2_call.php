<?php

sesion_start( );

$_SESSION[ 'nama' ] = "Angello Giovanida Anthony";

$_SESSION[ 'absen' ] = 03;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esi 2</title>
</head>
<body>
    <?php
    echo "Hallo, nama saya adalah " . $_SESSION[ 'nama' ] . "<br";
    echo "Hallo, absen saya adalah " . $_SESSION[ 'absen' ];
    ?>
</body>
</html>