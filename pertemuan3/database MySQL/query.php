<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection){
    die("Connection Failed : " . mysqli_connect_error());
}   echo "Connection Successfuly to project1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru(ID, NAMA_LENGKAP, ALAMAT, TL, NIP,
JURUSAN) VALUES('','Angello G Anthony', 'Jalan Raya Jetak no 19', '2005-02-21','G210205', 'Rpl')");
if(!$query_insert){
    
}   echo ("Error query " . mysqli_error($connection));
mysqli_close($connection);
?>