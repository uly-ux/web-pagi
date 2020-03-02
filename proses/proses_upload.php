<?php
// ambil data file
    if(isset($_POST['upload'])){
        $nama_file=$_FILES['foto']['name'];

        $format=explode(".", $nama_file);
        $fileExtension= end($format);
        $nama_sementara=$_FILES ['foto']['tmp_name'];
        $md5file=md5($nama_file) . "." . $fileExtension;

// tentukan lokasi file yang akan dipindahkan
        $lokasi_upload="../upload/";

// pindahkan file
        $fungsi_upload=move_uploaded_file($nama_sementara, $lokasi_upload.$md5file);

        if($fungsi_upload){

            echo 'data file berhasil diupload<br>';
        }else{
            echo 'data gagal diupload';
        }

    }

?>