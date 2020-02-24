<?php
    include'../koneksi/koneksi.php';
?>

if(isset($_POST['regis'])){
   $id=md5($_POST['id_user']); 
   $username=($_POST['username']); 
   $password=($_POST['pass']); 
   $email=($_POST['email']); 
   $level=($_POST['level']); 
    
    
    $input_query= mysqli_query($koneksi,"INSERT into user VALUES('$id','$username','$password', '$nama_lengkap','$email','$level')") or die (mysqli_error($input_query));

    if($input_query){
        echo"
        <script>alert(Data berhasil di input dan silahkan login')window.location.href='../login.php'
        </script>
        ";
    }
}