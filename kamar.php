<?php 
$kon=mysqli_connect("localhost","root","","sewa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Kamar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <div class="row">
   <h2 class="col-sm-4">Program Kamar Sewa</h2>
   <div class="col-sm-8">
   <form name="frmcari" method="post" class="input-group mb-8" target="frmhasil" action="hasilcarikamar.php">
   <input type="text" class="form-control" placeholder="Ketik kamar yang dicari" name="kCari" id="kCari">
   <button class="btn btn-success" type="submit" name="bCari">Go</button>
  </form>
   </div>
  </div> 
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="kode_kamar">Kode Kamar:</label>
      <input type="text" class="form-control" id="kode_kamar" placeholder="Ketik kode Kamar" name="kode_kamar">
    </div>
    <div class="mb-3">
      <label for="no_kamar">Nomor Kamar:</label>
      <input type="text" class="form-control" id="no_kamar" placeholder="Enter nomor kamar" name="no_kamar">
    </div>
   
    <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
  </form>
  <iframe name="frmhasil" width="100%" height="400px"></iframe>
  <?php 
  if (isset($_POST['bSimpan'])) {
	  $kode_kamar=$_POST['kode_kamar'];
	  $no_kamar=$_POST['no_kamar'];
	  $sql="insert into kamar (kode_kamar,no_kamar) values ('".$kode_kamar."','".$no_kamar."')";
	  $q=mysqli_query($kon,$sql);
  }
  ?>
</div>

</body>
</html>
