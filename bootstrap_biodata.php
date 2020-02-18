<?php
 include'header.php';
?>

 <div class="container">
  <div class="row"></div>
   <div class="col-sm-12">
    <div class="page-header"><h1 align="center">Program Input Data Mahasiswa</h1></div>
    <form class="form-horizontal" action="" method="POST" role="form">
     <div class="form-group">
      <label for="nim" class="control-label col-sm-2">Nim</label>
      <div class="col-sm-7">
       <input type="text" name="nim" id="nim" class="form-control" placeholder="Inputkan Nim" required>
      </div> 
     </div>

     <div class="form-group">
      <label for="nama" class="control-label col-sm-2">Nama</label>
      <div class="col-sm-7">
       <input type="text" name="nama" id="nama" class="form-control" placeholder="Inputkan Nama Lengkap Anda" required >
      </div> 
     </div>

     <div class="form-group">
      <label for="alt" class="control-label col-sm-2">Alamat</label>
      <div class="col-sm-7">
       <input  type="text" name="alamat" id="alamat"  class="form-control" placeholder="Inputkan Alamat Lengkap Anda" required >
      </div> 
     </div>

     <div class="form-group">
      <label for="jk" class="control-label col-sm-2">Jenis Kelamin</label>
      <div class="col-sm-2">
       <select type="text" name="jkl" id="jkl" class="form-control">
        <option value="">Pilih Kelamin</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
       </select>
      </div> 
     </div>

     <div class="form-group">
      <label for="rs" class="control-label col-sm-2">Jurusan</label>
      <div class="col-sm-7">
       <input  type="text" name="jrs" id="jrs"  class="form-control" placeholder="Inputkan Jurusan ">
      </div> 
     </div>

     <div class="form-group">
      <label for="makul" class="control-label col-sm-2">Mata Kuliah Tekhnologi Informasi</label>
      <div class="col-sm-7">
       <input  type="text" name="mk" id="mk"  class="form-control" placeholder="Inputkan Mata Kuliah">
      </div> 
     </div>

     <div class="form-group">
      <label for="kelas" class="control-label col-sm-2">Kelas</label>
      <div class="col-sm-2">
       <select type="text" name="kls" id="kls" class="form-control">
        <option value="">Pilih Kelas</option>
        <option value="A">Kelas Web Programming</option>
        <option value="body">Kelas Design Graphis</option>
       </select>
      </div> 
     </div>

     <div class="form-group">
      <label for="kets" class="control-label col-sm-2">Keterangan</label>
      <div class="col-sm-7">
       <textarea  type="text" name="ket" id="ket" rows="6" class="form-control" ></textarea>
      </div> 
     </div>

     <div class="form-group">
      <label for="nil" class="control-label col-sm-2">Nilai</label>
      <div class="col-sm-7">
       <input  type="text" name="nilai" id="nilai"  class="form-control" placeholder="Inputkan Nilai">
      </div> 
     </div>

     <div class="form-group">
       <label for="sim" class="control-label col-sm-2">Apply</label>
      <div class="col-sm-7">
       <button type="submit" id="btnSimpan" name="btnSimpan" class="btn btn-danger">Simpan</button>
      </div> 
     </div>
 </div> 


<?php
    include'footer.php';
?>