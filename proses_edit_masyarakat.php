<?php
include 'koneksi/koneksi.php';

if (isset ($_POST['simpan'])) {
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$username =$_POST['username'];
	$password =$_POST['password'];
	$telp =$_POST['telp'];

		$sql=mysqli_query($koneksi, "UPDATE masyarakat SET
		nama='$nama',
		username='$username',
		password='$password',
		telp='$telp' WHERE nik = '$nik'");
		if ($sql) {
			echo "
		<script>
	alert('data berhasil di edit')
	document.location.href= 'index.php';
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