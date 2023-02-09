<?php
include 'koneksi/koneksi.php';

if (isset ($_POST['simpan'])) {
	$id_petugas = $_POST['id_petugas'];
	$nama_petugas = $_POST['nama_petugas'];
	$username =$_POST['username'];
	$password =$_POST['password'];
	$telp =$_POST['telp'];
    $level =$_POST['level'];
	
	

		$sql=mysqli_query($koneksi, "UPDATE petugas SET
		nama_petugas='$nama_petugas',
		username='$username',
		password='$password',
		telp='$telp',
        level='$level' WHERE id_petugas = '$id_petugas'");
		if ($sql) {
			echo "
		<script>
	alert('data berhasil di edit')
	document.location.href= 'data_petugas.php';
	</script>
	";
		}else{
			echo "
			<script>
			alert('data gagal diedit');
			</script>
			";
				}
			
		}

?>	