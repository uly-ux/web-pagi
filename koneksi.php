<?php
$server="aisbi.webblkaceh.com";
$username="u7022108_aisbi";
$password="aisbi12345@webpagi2020";
$db="u7022108_aisbi";

$koneksi=mysqli_connect($server,$username,$password,$db)or die(mysqli_error($koneksi));


if ($koneksi) {
    // echo"database berhasil terkoneksi";
}else if(!koneksi){
    die('koneksi gagal'. mysqli_connect_error());
}
?>