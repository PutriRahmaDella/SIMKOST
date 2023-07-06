<?php 
$kon=mysqli_connect("localhost","root","","sewa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>sewa kamar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <div class="row">
   <h2 class="col-sm-4">Data Penyewa</h2>
   <div class="col-sm-8">
   <form name="frmcari" method="post" class="input-group mb-8" target="frmhasil" action="hasilcaripenyewa.php">
   <input type="text" class="form-control" placeholder="Ketik ID yang dicari" name="kCari" id="kCari">
   <button class="btn btn-success" type="submit" name="bCari">Go</button>
  </form>
   </div>
  </div> 
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="id">ID :</label>
      <input type="text" class="form-control" id="id" placeholder="Ketik ID" name="id">
    </div>
    <div class="mb-3">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Ketik Nama" name="nama">
    </div>
	<div class="mb-3">
	 <label for="alamat" class="form-label">Alamat:</label>
   <input type="text" class="form-control" id="alamat" placeholder="Ketik Alamat" name="alamat">
    </div>
	<div class="mb-3">
      <label for="no_kamar">Nomor Kamar:</label>
      <input type="text" class="form-control" id="no_kamar" placeholder="Ketik Nomor Kamar" name="no_kamar">
    </div>
    <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
  </form>
  <iframe name="frmhasil" width="100%" height="400px"></iframe>
  <?php 
  if (isset($_POST['bSimpan'])) {
	  $id=$_POST['id'];
	  $nama=$_POST['nama'];
	  $alamat=$_POST['alamat'];
	  $no_kamar=$_POST['no_kamar'];
	  
	  $sql="insert into sewa (id,nama,alamat,no_kamar) values ('".$id."','".$nama."','".$alamat."','".$no_kamar."')";
	  $q=mysqli_query($kon,$sql);
  }
  ?>
</div>

</body>
</html>
