<?php $kodedihapus=$_GET['id'];
if (isset($_GET['id'])) {
 $sql="delete from penyewa where id='".$kodedihapus."'";
 $kon=mysqli_connect("localhost","root","","sewa");
 $q=mysqli_query($kon,$sql);
 if ($q) {
	 echo "<script>alert('Rekord sudah dihapus !');</script>";
 } else {
	 echo "<script>alert('Rekord gagal dihapus !');</script>";
 }
 header('location:penyewa.php');
}
?>