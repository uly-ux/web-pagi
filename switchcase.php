<!-- Program struktur switch case menentukan hari-->
<?php
    $day = "mon";
    switch ($day) {
        case 'sun' : $hari = "Minggu"; break;
        case 'mon' : $hari = "Senin"; break;
        case 'Tue' : $hari = "Selasa"; break;
        case 'Wed' : $hari = "Rabu"; break;
        case 'Thu' : $hari = "Kamis"; break;
        case 'Fri' : $hari = "Jumat"; break;
        case 'Sat' : $hari = "Sabtu"; break;
        default    : $hari = "kiamat";
    }
    echo "Hari ini hari <b>$hari</b>";
?>

<!-- Program struktur kondisi khusus (untuk memeriksa tahun kabisat) -->
<?php
 $tahun = "2020";
 $kabisat = ($tahun%4 == 0) ? "KABISAT" : "BUKAN KABISAT";
 echo "Tahun <b>$tahun</b> $kabisat";
?>

<!-- contoh soal -->
<?php
 $nama="Uly Hafnita";
 $nim="1288906";
 $jurusan="Web Programming";
 $harian = 75 * 10 / 100;
 $Quis = 80 * 15 /100;
 $UAS = 80 * 40 /100;
 $UTS = 95 * 35 /100;
 $nilai= $harian + $Quis + $UAS + $UTS;

   if($nilai<=50){
    echo"Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah E";
}
else if($nilai<=65){
    echo"Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah D";
}   
else if($nilai<=72){
    echo"Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah C";
}      
else if($nilai<=83){
    echo"Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah B";
}
else if($nilai<=100){
    echo"Grade yang diperoleh oleh $nama dengan $nim dan $jurusan adalah A";
}      
else{
    echo"$nama dengan $nim dan $jurusan dinyatakan Tidak Lulus";
}                                                                                                     
?>

