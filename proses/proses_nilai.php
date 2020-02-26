<?php
include'../koneksi/koneksi.php';

if(isset($_POST['input'])){
    $id_mahasiswa=uniqid();
    $nama_mahasiswa=$_POST['nama'];
    $nim_mahasiswa=$_POST['nim'];
    $jur_mahasiswa=$_POST['jur'];
    $nilai_harian=$_POST['harian'];
    $nilai_quiz=$_POST['quiz'];
    $nilai_uts=$_POST['uts'];
    $nilai_uas=$_POST['uas'];
    $hasil=($nilai_harian*0.1)+($nilai_quiz*0.15)+($nilai_uts*0.35)+($nilai_uas*0.4);

    if($hasil<=50){
        $grade='E';
    }else if($hasil<=65){
        $grade='D';
    }else if($hasil<=75){
        $grade='C';
    }else if($hasil<=85){
        $grade='B';
    }else if($hasil<=100 ||$hasil>100){
        $grade='A';
    }
   
    $nilai_query= mysqli_query($koneksi,"INSERT into mahasiswa VALUES('$id_mahasiswa','$nama_mahasiswa','$nim_mahasiswa','$jur_mahasiswa','$nilai_harian','$nilai_quiz','$nilai_uts','$nilai_uas','$hasil','$grade')") or die (mysqli_error($nilai_query));

    if($nilai_query){
        echo'<script>alert("nilai berhasil di Input");
        window.location.href="../mahasiswa.php";
        </script>';
    }else{
        echo'<script>alert("nilai gagal di input");
        window.location.href="../mahasiswa.php";
        </script>';
    }
}

?>
