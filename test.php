<?php
$sepatu=100000;
$diskon=0.1;

$harga_net=$sepatu-($sepatu*$diskon);
echo"harga yang harus dibayar = Rp.$harga_net";
?>

<br>
<?php
// penggunaan operator modulus/sisa hasil bagi //
$hal = 10;
if ($hal %2 == 0) {
echo 'Halaman genap';
} else {
echo 'Halaman ganjil';
}
?>

<br>
<?php
// penggunaan operator modulus/sisa hasil bagi //
$hal = 11;
if ($hal %2 == 0) {
echo 'Halaman genap';
} else {
echo 'Halaman ganjil';
}
?>

<br>
<!-- Operator -->
<?php
$a=10;
$b=5;
$c=7;
$d=8;

$kali=($a*$d);
$tambah=($a+$c);
$kurang=($b-$d);
$bagi=($a/$b);
$hasil="$kali";

if($hasil==80){
    echo"nilai anda adalah $kali";

}else if($hasil==17){
    echo"nilai anda adalah $tambah";

}else if($hasil==-3){
    echo"nilai anda adalah $kurang";
 
}else if($hasil==2){
    echo"nilai anda adalah $bagi";
}
?>

<!-- contoh penanganan beberapa tipe dasar dalam PHP (Pembuatan biodata dan nilai mahasiswa) -->
<br>
<?php
$nim = "171025312870003";
$nama = 'Uly Hafnita';
$umur = "33 Tahun";
$nilai = 90.25;
$status = TRUE;

echo "NIM :" . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur :" . $umur; print "<br>";
printf ("Nilai : %.2f<br>", $nilai);
if ($status){
    echo "status : Aktif";
}else{
    echo "status : Tidak Aktif";
}
?>

<!-- contoh penggunaan Konstanta dalam PHP (Penggunaan define) -->
<br>
<br>
<?php
define ("NAMA", "Uly Hafnita");
define ("Alamat", "Batoh");
define ("Umur", "23 Tahun");
define ("NILAI", 95);

//NAMA = "Nadya"; //akan menyebabkan error
echo "Nama : " . NAMA;
echo "<br>Alamat : " . Alamat;
echo "<br>Umur : " . Umur;
echo "<br>Nilai : " . NILAI;
?>

<!-- contoh penggunaan Aritmatika dalam PHP -->
<br>
<br>
<?php
$gaji = 1000000;
$pajak = 2.5;
$thp = $gaji - ($gaji*$pajak);

echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>

<!-- contoh penggunaan Logika dan perbandingan dalam PHP -->
<br>
<br>
<?php
$a = 5;
$b = 4;

if($a == $b){
    echo "Tidak mungkin";
}

if($a != $b){
    echo "ya anda benar <br>";
}

if($a > $b){
    echo "Anda jenius <br>";
}

if($a == $b){
    echo "Tidak mungkin";
}

echo "$a == $b : ". ($a == $b);
echo "<br>$a != $b : ". ($a != $b);
echo "<br>$a > $b : ". ($a > $b);
echo "<br>$a < $b : ". ($a < $b);
echo "<br>$a != $b && ($a > $b) : ".(($a != $b) && ($a > $b));
echo "<br>$a != $b || ($a > $b) : ".(($a != $b) || ($a > $b));
?>

<!-- contoh cara lainnya -->
<br>
<br>
<?php
$Hari = "Rabu";
    
If($Hari == "senin"){
    echo "Pergi ke BLK";
}
else if($Hari == "selasa"){
    echo "Pergi ke Pasar";
}
else if($Hari == "Rabu"){
    echo "Pergi ke Mesjid";
}
else if($Hari == "Kamis"){
    echo "Pergi ke Sekolah";
}
else if($Hari == "Jumat"){
    echo "Pergi ke Rumah Sakit";
}
else{
    echo "Pergi ke Liburan";
}
?>

<!-- contoh lain php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nama="Uly Hafnita";
$alamat="Batoh";
// echo($nama.alamat);
 $nama="Uly Hafnita";
 $alamat="Batoh";
 $nohp="08116881312";
 $hasil="";
if($hasil="Uly Hafnita"){
    echo($nama);
}else{
    echo($nohp);
}                                                                                                                                                                                                                                                                                                                                                                                    
?>

  <?php
  $a=10;
  $b=20;

  function myTest(){
      global $a;
      global $b;
      echo ($a)+($b);
}
mytest();
  ?>

  <?php
  global $a;
  $a="abc";
  $b="Uly Hafnita";
//   adalah sama dengan menggunakan perintah:
 echo $GLOBALS["a"]="abc";
 echo $GLOBALS["b"]="Uly Hafnita";
  ?>  
</body>
</html>