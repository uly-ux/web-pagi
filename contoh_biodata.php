<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA</title>
</head>
<body>
    
    <head><title>Pengolahan Form</title></head>
    <body>
        <form action="proses/proses_biodata.php" method="POST">
            nama anda : <input type="text" name="nama"><br>
            <input type="submit" name="input" value="input">
        </form>
    </body>
</html>

<?php
if (isset($_post['tambah'])) {
    $nama = $_post['ULY HAFNITA'];
    echo "nama saya adalah : <br> $nama </br>";
}
?>

<br>
<br>
<!-- contoh lain -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA</title>
</head>
<body>
    
    <head><title>Pengolahan Form</title></head>
    <body>
        <form action="" method="post">
            Nama : <input type="text" name="nama">
            <input type="submit" name="tambah" value="input"><br><br>
            Email : <input type="email" placeholder="admin@email"><br><br>
            Jenis Kelamin : <input type="radio" name="kamu">laki-laki
            <input type="radio" name="kamu">perempuan <br><br>
            Tempat Lahir : <input type="email" placeholder=""><br><br>
            Tanggal Lahir : <input type="date" placeholder="dd/mm/yyyy"><br><br>
            No. Hp : <input type="number" placeholder="Masukkan No.Hp"><br><br>
            Hobby : <input type="checkbox" name="hobby1">Reading
            <input type="checkbox" name="hobby2">Travelling
            <input type="checkbox" name="hobby3">Surving
            <input type="checkbox" name="hobby4">Shopping
            <input type="checkbox" name="hobby5">Writting
        </form>   

<?php
if (isset($_post['tambah'])) {
    $nama_saya= $_post['nama'];
    $nama_saya= $_post['email'];
    $nama_saya= $_post['jenis_kelamin'];
    $nama_saya= $_post['Tempat Lahir'];
    $nama_saya= $_post['Tanggal Lahir'];
    $nama_saya= $_post['No_Hp'];
    $nama_saya= $_post['Hobby'];
    echo "nama saya adalah $nama_saya";
}

?>

    </body>
</html>


<!-- contoh lain pengolahan form -->
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA</title>
</head>
<body>
    
    <head><title>Pengolahan Form</title></head>
    <body>
        <form action="proses/proses_biodata.php" method="post">
            <label> Nama :</label>
            <input type="text" name="nama" placeholder="Masukkan Nama">
            <label> Email :</label>
            <input type="email" name="email" placeholder="admin@gmail">
            <label> Jenis Kelamin :</label>
            <input type="radio" name="jk" value="Laki-laki">Laki-laki
            <input type="radio" name="jk" value="Perempuan">Perempuan
            <label> Alamat :</label>
            <textarea name="Alamat"></textarea>
            <label> Tanggal :</label>
            <input type="date" name="tanggal">
            <label> Tempat Lahir :</label>
            <input type="text" name="Tempat_Lahir">
            <label> No. HP :</label>
            <input type="number" name="no_hp">
            <label> Hobby :</label>
            <input type="checkbox" name="hobby1" value="Reading">Reading
            <input type="checkbox" name="hobby2" value="Travelling">Travelling
            <input type="checkbox" name="hobby3" value="Surving">Surving
            <input type="checkbox" name="hobby4" value="Shopping">Shopping
            <input type="checkbox" name="hobby5" value="Writting">Writting

            <input type="submit" name="tambah" value="Input">
        </form>   

<?php
if (isset($_post['tambah'])) {
    $nama_saya= $_post['nama'];
    $email_saya= $_post['email'];
    $Jenis_Kelamin= $_post['jenis_kelamin'];
    $Alamat_saya= $_post['Alamat'];
    $Tanggal_lahir= $_post['Tanggal_Lahir'];
    $Tempat_lahir= $_post['Tempat_lahir'];
    $Hobby1= $_post['Hobby1'];
    $Hobby2= $_post['Hobby2'];
    $Hobby3= $_post['Hobby3'];
    $Hobby4= $_post['Hobby4'];
    $Hobby5= $_post['Hobby5'];
    
    echo "nama saya adalah $nama_saya <br>";
    echo "email saya adalah $email_saya <br>";
    echo "saya seorang $Jenis_Kelamin <br>";
    echo "Alamat saya di $Alamat <br>";
    echo "saya lahir pada tanggal $Tanggal_lahir <br>";
    echo "Tempat lahir saya di $Tempat_lahir <br>";
    echo "hubungi saya di nomor $No_HP <br>";
    echo "Hobby saya $Hobby1 <br>";
    echo "Hobby saya $Hobby2 <br>";
    echo "Hobby saya $Hobby3 <br>";
    echo "Hobby saya $Hobby4 <br>";
    echo "Hobby saya $Hobby5 <br>";
    
}

?>

    </body>
</html>

