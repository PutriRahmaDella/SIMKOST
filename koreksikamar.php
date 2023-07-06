<?php 
$kon=mysqli_connect("localhost","root","","sewa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kamar Sewa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
 <div class="row">
  <h2 class="col-sm-4">Koreksi Kamar Kost</h2>
 </div> 
 <?php
 if (isset($_GET['kode_kamar'])) {
  $kodedikoreksi=$_GET['kode_kamar'];
  $sql="select * from kamar where kode_kamar='".$kodedikoreksi."'";
  $q=mysqli_query($kon,$sql);
  $r=mysqli_fetch_array($q);
  if (empty($r)) {
		echo '
		<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Tidak ada rekordnya!</strong> Tidak ada rekord yang sesuai dengan kriteria pencariannya !.
</div>
		';
		exit();
	}
 } //end jika isset kode prodi
 ?>
 <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="kode_kamar">Kode Kamar :</label>
      <input type="text" class="form-control" id="kode_kamar" placeholder="kode_kamar" name="kode_kamar" 
	  value="<?php echo $r['kode_kamar'];?>">
    </div>
    <div class="mb-3">
      <label for="no_kamar">Nomor Kamar:</label>
      <input type="text" class="form-control" id="no_kamar" placeholder="Ketik Nomor Kamar" name="no_kamar"
	  value="<?php echo $r['no_kamar'];?>">
    </div>
    </div>
   
    <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
	<button type="
  </form>
  <?php 
  if (isset($_POST['bSimpan'])) {
    $kode_kamar=$_POST['kode_kamar'];
  	$no_kamar=$_POST['no_kamar'];
    $sql="update kamar set no_kamar='".$no_kamar."' where kode_kamar='".$kode_kamar."'";
    $q=mysqli_query($kon,$sql);
    if ($q) {
     echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Sudah disimpan !</strong> Rekord yang dikoreksi sudah disimpan !.
</div>';
	} else {
	 echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Gagal disimpan !</strong> Rekord yang dikoreksi gagal disimpan !.
</div>';
	} 		
  } 
  ?>
</div>
</body>
</html>