<?php
include'header.php';
?>
<br>
<br>
<!-- <form action="" method="POST">
        <input type="text" name="mangga">
        <input type="submit" name="tambah" value="tampil">
</form> -->

<?php
//     if(isset($_POST['tambah'])) {
//         $buah=$_POST['mangga'];

//         $arraybuah= [
//             "mangga",
//             "jambu",
//             "kelapa"
//         ];
//         if($buah=$arraybuah[2]){
//             echo"$arraybuah[2]";
        
//     }
// }
    $nilai= array(
        "ani"=>80,
        "doni"=>90,
        "budi"=>50,
        "joko"=>60
    );

    // menampilkan nilai dengan foreach
    foreach($nilai as $key=>$value){
        echo"$key = $value <br>";
    }
?>

<?php
include'footer.php';
?>