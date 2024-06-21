<?php
$server = "localhost";
$user = "admin";
$pass = "admin3169";
$db = "makelkullanici";

// mysqli_connect() ==> fonksiyon
@$bag = mysqli_connect($server, $user, $pass, $db);
// new mysqli()  ==> nesne üreten satır. 
if (!$bag) {
    die('mysqli connection failed: ' . mysqli_connect_error());
}



?>