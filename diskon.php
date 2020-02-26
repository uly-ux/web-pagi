<?php
 include'header.php';
?>

<!-- content -->
<div class="container">
  <div class="row">
    <div class="col-6">
      <form action="proses/proses_diskon.php" method="POST">
        <div class="form-group">
          <label for="nama barang">Nama Barang :</label>
          <input type="text"  name="nama_barang" class="form-control" id="nama_barang">
        </div>
        <div class="form-group">
          <label for="harga_barang">Harga Barang :</label>
          <input type="number" name="harga_barang" class="form-control" id="harga_barang">
        </div>
        <div class="form-group">
          <label for="kategori">kategori :</label>
          <input type="text" name="kategori" class="form-control" id="kategori">
        </div>
        <div class="form-group">
          <label for="stok">stok :</label>
          <input type="number" name="stok_barang" class="form-control" id="stok">
        </div>
        <button type="submit" name="bayar" class="btn btn-primary" > Input </button>
        <br>
        <br>
    </form>
</div>
<div class="col-6">

      <?php
      include'koneksi/koneksi.php';

          if (isset($_POST['Input'])) {
              $nama_barang=$_POST ['nama_barang'];
              $harga_barang=$_POST ['harga'];
              $kategori_barang=$_POST ['kategori'];
              $stok_barang=$_POST ['stok'];
              // $diskon=20/100;

              $input_query=mysqli_query($koneksi,"SELECT * FROM stok VALUES('$id','$nama_barang','harga_barang','$kategori','$stok_barang')")or die(mysqli_error($input_query));
         
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

