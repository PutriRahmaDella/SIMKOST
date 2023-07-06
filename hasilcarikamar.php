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
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Kode Kamar</th>
        <th>Nomor Kamar</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	$kCari=$_POST['kCari'];
	$sqlcari="select * from kamar where kode_kamar like '%".$kCari."%' or kode_kamar like '%".$kCari."%'";
	$qcari=mysqli_query($kon,$sqlcari);
	$rcari=mysqli_fetch_array($qcari);
	if (empty($rcari)) {
		echo '
		<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Tidak ada rekordnya!</strong> Tidak ada rekord yang sesuai dengan kriteria pencariannya !.
</div>
		';
		exit();
	}
	do {	
	?>
      <tr>
        <td><?php echo $rcari['kode_kamar'];?></td>
        <td><?php echo $rcari['no_kamar'];?></td>
        <td><a href="koreksikamar.php?kode_kamar=<?php echo $rcari['kode_kamar'];?>" target="frutama" class="btn btn-primary">Koreksi</a>
		<a href="hapuskamar.php?kode_kamar=<?php echo $rcari['kode_kamar'];?>" target="frutama" class="btn btn-danger" onclick="return confirm('Apakah akan dihapus ?')">Hapus</a></td>
      </tr>
	<?php
	} while($rcari=mysqli_fetch_array($qcari));
    ?>	
    </tbody>
 </table>
</div>

</body>
</html>