<?php

$connection = mysqli_connect("localhost", "root", "", "sekolahh");
if(!$connection){
    echo mysqli_connect_error();
}
