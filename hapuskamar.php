<?php $kodedihapus=$_GET['id'];
if (isset($_GET['kode_kamar'])) {
 $sql="delete from kamar where kode_kamar='".$kodedihapus."'";
 $kon=mysqli_connect("localhost","root","","sewa");
 $q=mysqli_query($kon,$sql);
 if ($q) {
	 echo "<script>alert('Rekord sudah dihapus !');</script>";
 } else {
	 echo "<script>alert('Rekord gagal dihapus !');</script>";
 }
 header('location:kamar.php');
}
?>