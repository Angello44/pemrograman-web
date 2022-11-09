<?php
session_start();
// ambil data dari form login
$username = $_POST['username']; //<-- ini belum aman dari sql injection :D 

// memanggil konfig database
include_once('config.php');
// ambil data dari database
$query = mysqli_query($conn_db,"SELECT * FROM users WHERE username='$username'");
$user = mysqli_fetch_assoc($query);

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

         // mengecek apakah username dan password sesuai dengan database
    if ($username == $user['username'] ) {
        
            $_SESSION['username'] = $username;
            header("location:admin.php");
        } else {
            echo '<script> alert("Username atau password salah!");
            window.location="login-page.php"; </script>';
        }

    } else {
        echo '<script> window.location="login-page.php"; </script>';
    }
?>