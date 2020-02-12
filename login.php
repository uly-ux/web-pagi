<!-- proses memeriksa user name dan password dengan If.. else. -->
<?php
    $user = "achmatim";
    $pass = "123";
    if ($user == "achmatim" && $pass == "123") {
        echo "Login Berhasil";
    }else {
        echo "Login Gagal";
    }
?>

<!-- contoh lain proses memeriksa user name dan password dengan If.. else. -->
<?php
    $username = "siswa";
    $password = "siswa123";

    if ($username == "admin" && $password == "admin123") {
        echo "Lari ke halaman admin";
    }else if($username=="siswa"&& $password=="siswa123"){
        echo "Login Gagal";
    }else{
        echo"username dan password salah";
    }
?>

<!-- memeriksa suatu variabel ada atau tidak -->
<?php
$user="";

if (!isset($user)) {
    echo "variabel tidak ada/belum terbentuk";
}else{
    echo "variabel ada";
}
?>
