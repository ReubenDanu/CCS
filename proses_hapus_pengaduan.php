<?php
//file untuk menghapus data
include"koneksi/koneksi.php";
$var_id = $_GET['id_pengaduan'];
// query delete untuk menghapus data berdasarkan primary key
$query ="DELETE FROM pengaduan WHERE id_pengaduan = $var_id";



$queryDelete = mysqli_query($koneksi, $query);
if ($queryDelete) {
	echo "
	<script>
	alert('data berhasil di hapus')
	window.location.href= 'data_pengaduan.php';
	</script>

	";
}else{
	echo "
	<script>
	alert('data Gagal di hapus')
	window.location.href= 'index_pengaduan.php';
	</script>
";}

?>