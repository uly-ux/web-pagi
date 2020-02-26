<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon</title>
</head>
<body>
    <form action="" method="POST">
        <label> sepatu :</label>
        <input type="number" name="sepatu" placeholder="Masukkan Harga">
        <br><br>
        <label> Diskon :</label>
        <input type="number" name="diskon" placeholder="Masukkan nominal diskon">
        <input type="submit" name="input" value="input">
        <br><br>
    </form>
</body>
</html>

<?php

if (isset($_POST['input'])) {
    $sepatu = $_POST['sepatu'];
    $diskon = $_POST['diskon'];
    $harga_minimal_diskon = 400000;
    $harga_setelah_diskon;

    if($sepatu >= $harga_minimal_diskon) {
        $harga_diskon=$sepatu-($sepatu*$diskon/100);
        echo "Total harga setelah diskon adalah Rp.$harga_diskon <br><br>";
    }else{
        echo "sepatu <br><br>";
    }
}
?>