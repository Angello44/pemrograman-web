<?php
include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn_db, "DELETE FROM customers WHERE id=$id");
if ($result){
    $message = "Berhasil Menghapus Customer";
} else {
    $message = "Gagal Menghapus Customer";

}

header("Location:index.php?message=".$message);
?>