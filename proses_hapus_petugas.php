<?php
//file untuk menghapus data
include"koneksi/koneksi.php";
$var_id = $_GET['id_petugas'];
// query delete untuk menghapus data berdasarkan primary key
$query ="DELETE FROM petugas WHERE id_petugas = $var_id";



$queryDelete = mysqli_query($koneksi, $query);
if ($queryDelete) {
	echo "
	<script>
	alert('data berhasil di hapus')
	window.location.href= 'data_petugas.php';
	</script>

	";
}else{
	echo "
	<script>
	alert('data Gagal di hapus')
	window.location.href= 'index_petugas.php';
	</script>
";}

?>