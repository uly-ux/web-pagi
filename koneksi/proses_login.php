<?php
include'../koneksi/koneksi.php';

 
if(isset($_POST['login'])) {
    $username =$_POST ['username'];
    $password =md5($_POST ['password']);

    // query
    $login=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and password='$password'");
    
    // pengecekan
    $cek=mysqli_fetch_assoc($login);

    // menampilkan definisi data
    $data=mysqli_fetch_assoc($login);

    if ($cek>0) {
        if($data['level']=="penjual"){
            $_SESSION['username']=$data['username'];
            $_SESSION['level']=$data['level'];
            $_SESSION['status']='login';

            echo "<script> alert(window.location.href='../bootstrap_biodata.php');
            </script>";
        }
    }
}

    // if(isset($_POST['login'])){
    //     $username=$_POST['username'];
    //     $password=$_POST['password'];

        // if($username=='uly' && $password=='123'){
            
    //     
  
?>