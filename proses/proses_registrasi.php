<?php
    include'../koneksi/koneksi.php';


if(isset($_POST['regis'])){
   $id=md5(uniqid()); 
   $username=($_POST['username']); 
   $password=($_POST['pass']); 
   $nama_lengkap=($_POST['nama_lengkap']); 
   $email=($_POST['email']); 
   $level=($_POST['level']);
    
    
    $input_query=mysqli_query($koneksi,"INSERT into user VALUES('$id','$username','$password','$nama_lengkap','$email','$level')") or die (mysqli_error($input_query));

    
    if($input_query){
        echo"
        <script>alert('Data berhasil di input dan silahkan login')
        window.location.href='../form_login.php'
        </script>";
    }else{
    }
}
?>