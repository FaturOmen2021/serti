<?php
//Membuat variable untuk tampungan data kredensial database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test123');
 
//query untuk melakukan koneksi ke database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
//melakukan cek koneksi
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>