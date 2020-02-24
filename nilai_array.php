<?php
include'header.php';
?>
<br>
<br>
<form action="" method="POST">
        <input type="text" name="color">
        <input type="submit" name="tambah" value="tampil">
</form>

<?php
    if(isset($_POST['tambah'])) {
        $color=$_POST['color'];

        $arraycolor= [
            "merah",
            "hijau",
            "biru",
            "orange",
            "kuning",
            "ungu"
        ];
        if ($color==$arraycolor[0]){
            echo"<p style='color: red'>$color</p>";
        }
        else if ($color==$arraycolor[1]){
            echo"<p style='color: green'>$color</p>";
        }
        else if ($color==$arraycolor[2]){
            echo"<p style='color: blue'>$color</p>";
        }
        else if($color==$arraycolor[3]){
            echo"<p style='color: orange'>$color</p>";
        }
        else if ($color==$arraycolor[4]){
            echo"<p style='color: yellow'>$color</p>";
        }
        else if ($color==$arraycolor[5]){
            echo"<p style='color: purple'>$color</p><br><br>";
        }
}

<?php
    $arrwarna = array ("blue", "black", "red", "yellow", "green");
    $arrnilai = array ("ani" => 80, "otim" => 90, "ana" => 75, "budi" => 85);
        echo "<pre>";
        print_r ($arrwarna);
        echo "<br>";
        print_r ($arrnilai);
        echo "</pre>";
?>

