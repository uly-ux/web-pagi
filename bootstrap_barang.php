<?php
 include'header.php';
?>

<!-- content -->
<div class="container">
  <div class="row">
    <div class="col-6">
      <form action="" method="POST">
        <div class="form-group">
          <label for="nama barang">Nama Barang :</label>
          <input type="text"  name="nama_barang" class="form-control" id="nama_barang">
        </div>
        <div class="form-group">
          <label for="harga_barang">Harga Barang :</label>
          <input type="number" name="harga" class="form-control" id="harga_barang">
        </div>
        <button type="submit" name="Input" class="btn btn-primary" > Input </button>
        <br>
        <br>
    </form>
</div>
<div class="col-6">

      <?php
          if (isset($_POST['Input'])) {
              $nama_barang=$_POST ['nama_barang'];
              $harga_barang=$_POST ['harga'];
              $diskon=20/100;
          if($harga_barang>=400000){
              echo "<div class='alert alert-primary' role='alert'> Harga diskon yang diperoleh sebesar Rp.", $harga_barang*$diskon;
              echo "<br> dan Harga $nama_barang yang harus dibayar sebesar Rp.", $harga_barang-($harga_barang*$diskon);
              echo "</div>"; 
              }
            }
         ?>
    </div>
  </div>
</div>

<?php
    include'footer.php';
?>

