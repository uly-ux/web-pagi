<?php
include'../koneksi/koneksi.php';

if(isset($_POST['bayar'])){
    $id=uniqid();
    $nama_barang=$_POST['nama_barang'];
    $harga_barang=$_POST['harga_barang'];
    $kategori=$_POST['kategori'];
    $stok_barang=$_POST['stok_barang'];

   $input_query= mysqli_query($koneksi,"INSERT into stok VALUES('$id','$nama_barang','$harga_barang','$stok_barang','$kategori')") or die (mysqli_error($input_query));

    if($input_query){
        echo'<script>alert("Data berhasil di Input")
        window.location.href="../diskon.php"
     </script>';
    }else{
        echo'<script>alert("Data gagal di input")
        window.location.href="../diskon.php"
     </script>';
    }
}

?>

