<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "jurnalku";

$connect = mysqli_connect($host, $user, $pass, $db);

if(!$connect){
    echo "Berhasil terkoneksi ke database";
    mysqli_close ($connect);
}else{
    die("Gagal terkoneksi: " . mysqli_connect_error());
}
?>

