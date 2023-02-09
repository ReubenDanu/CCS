<?php
//file untuk menghapus data
include"koneksi/koneksi.php";
$var_id = $_GET['nik'];
// query delete untuk menghapus data berdasarkan primary key
$query ="DELETE FROM masyarakat WHERE nik = $var_id";



$queryDelete = mysqli_query($koneksi, $query);
if ($queryDelete) {
	echo "
	<script>
	alert('data berhasil di hapus')
	window.location.href= 'index.php';
	</script>

	";
}else{
	echo "
	<script>
	alert('data Gagal di hapus')
	window.location.href= 'index_masyarakat.php';
	</script>
";}

?>