<!-- contoh Struktur Perulangan -->
<?php
    for ($i=0; $i<=10; $i++){
        echo "Haloo";
    }
?>

<!-- contoh lain -->
<?php
for  ($i=2; $i <= 10; $i += 2){
    echo "<br> Bilangan Genap adalah $i <br>";
}
?>

<br>;
<!-- contoh lain -->
<?php
for  ($i=1; $i <= 10; $i += 2){
    echo "<br> Bilangan Ganjil adalah $i <br>";
}
?>

<br>;
<!-- contoh lain -->
<?php
    /* contoh 1 */
    for ($i = 1; $i <= 10; $i ++) {
        echo "$i";
    }
    echo "<br><br>";


    /* contoh 2 */
    for ($i = 1; ; $i++){
        if ($i > 10){
        break;
        }
        echo "$i";
    }
    echo "<br><br>";


    /* contoh 3 */
    $i = 1;
    for (; ; ) {
        if($i > 10) {
        break;
        }
        echo "$i";
        $i++;
    }   echo "<br><br>";


    /* contoh 4 */
    for ($i = 1; $i <= 10; print "$i ", $i++);
?>

