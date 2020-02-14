<!-- contoh perulangan While -->
<?php
    $nilai=0;
    while ($nilai <= 10) {
        echo "$nilai adalah urutan satuan bilangan <br>";
        $nilai++;
    }
?>

<!-- contoh Perulangan Do... While -->
<br>
<?php
 $nilai=0;
 Do  { 
     echo "ini no.ke $nilai <br>";
     $nilai++;
 } while ($nilai <= 10);
?>

<!-- contoh Perulangan Do... While dengan menggunakan gambar -->
<br>
<?php
 $gambar=1;
 Do{
    echo "<img src='https://masaabuzahra.files.wordpress.com/2012/06/community1.jpg?w=300'>";
    $gambar ++;
 }while ($gambar <= 12);
?>

