<?php
include'../koneksi/koneksi.php';

if(isset($_GET['update'])){
    $id=$_GET['id_mahasiswa'];
    $nama_mahasiswa=$_GET['nama'];
    $nim_mahasiswa=$_GET['nim'];
    $jur_mahasiswa=$_GET['jur'];
    $nilai_harian=$_GET['harian'];
    $nilai_quiz=$_GET['quiz'];
    $nilai_uts=$_GET['uts'];
    $nilai_uas=$_GET['uas'];
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

    $update=mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama_mahasiswa',nim='$nim_mahasiswa',jurusan='$jur_mahasiswa',nilai_harian='$nilai_harian',nilai_quiz='$nilai_quiz',nilai_uts='$nilai_uts',nilai_uas='$nilai_uas',hasil='$hasil', grade='$grade' WHERE id_mahasiswa='$id'")or die(mysqli_error($update));
    
    if($update){
        echo'
            <script>alert("data berhasil diupdate");
            window.location.href="../mahasiswa.php"
            </script>
        ';
    }else{
        echo'
        <script>alert("data gagal diupdate");
        window.location.href="../edit_mahasiswa.php"
        </script>
    ';
    } 
}
?>