<?php

if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    date_default_timezone_get('Asia/Jakarta);
    $created = date ("Y-m-d H:s");

    include_once("config.php");

    $result = mysqli_query($conn_db, "INSERT INTO customers(name,email,phone,created)
    VALUES('$name', '$email', '$phone', '$created')");

    echo "Customer ". $name ." added successfuly. <a href='index.php'>View Customers</a>";
}
?>