<?php
session_start( );

$_SESSION[ ' nama '] = " Angello Giovanida Anthony ";

$_SESSION[ ' absen '] = 03;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latian Session</title>
</head>
<body>
    <?php
        echo "Nama saya " . $_SESSION[ 'nama' ] "<br>". "Noemor absen ". $_SESSION['absen'];
    ?>
</body>
</html>