<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sewa Kamar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body onload="print()">
<div class="container mt-3">
<h2>Daftar Data Kamar</h2>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Kode Kamar</th>
        <th>Nomor Kamar</th>
      </tr>
    </thead>
    <tbody>
<?php
 $kon=mysqli_connect("localhost","root","","sewa");
 $sql="select * from kamar";
 $q=mysqli_query($kon,$sql);
 $r=mysqli_fetch_array($q);
 do {
?>
      <tr>
        <td><?php echo $r['kode_kamar'];?></td>
        <td><?php echo $r['no_kamar'];?></td>
        <td>
		<?php
		 $sqlm="select count(kode_kamar) as jumlah from kamar where kode_kamar='".$r['kode_kamar']."'";
		 $qm=mysqli_query($kon,$sqlm);
		 $rm=mysqli_fetch_array($qm);
		 if (!empty($rm)) echo $rm['jumlah'];
		?>
		</td>
      </tr>
<?php
 } while ($r=mysqli_fetch_array($q));
?>
    </tbody>
</table>
</div>
</body>
</html>