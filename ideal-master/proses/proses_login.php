<?php
session_start();
include'../koneksi/koneksi.php';


        if(isset($_POST['login'])){
            $username= $_POST['username'];
            $password=md5($_POST['pass']);
            

            // query
            $login=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and pass='$password'");
            // pengecekan
            $cek=mysqli_num_rows($login);
            // menampilkan definisi data
            $data=mysqli_fetch_assoc($login);

            if($cek>0){
                if($data['level']=="admin"){
                    $_SESSION['username']=$data['username'];
                    $_SESSION['nama_lengkap']=$data['nama_lengkap'];
                    $_SESSION['level']=$data['level'];
                    $_SESSION['status']='login';

                    echo"<script>
                    alert('Selamat Datang Penjual')
                    window.location.href='../admin/index.php';
                    </script>";
                }else if($data['level']=="user"){
                    $_SESSION['username']=$data['username'];
                    $_SESSION['nama_lengkap']=$data['nama_lengkap'];
                    $_SESSION['level']=$data['level'];
                    $_SESSION['status']='login';

                    echo"<script>
                    alert('Selamat Customer')
                    window.location.href='../admin/index.php';
                    </script>";
                }
            }else{
                echo'<script>alert("username dan password salah!")
                    window.location.href="../login.php";
                </script>';
            }


            // if($username=='admin'&& $password=='admin123'){
            //     header('location: mahasiswa.php');
            // }else if($username=='siswa'&& $password=='siswa123'){
            //     echo"<script>
            //     alert(window.location.href='diskon.php');
            //     </script>";
            // }else{
            //     echo"Login Gagal";
            // }
        }
    ?>