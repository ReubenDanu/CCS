<?php
include 'koneksi/koneksi.php';

if (isset ($_POST['simpan'])) {
	$id_tanggapan = $_POST['id_tanggapan'];
	$id_pengaduan = $_POST['id_pengaduan'];
	$tgl_tanggapan =$_POST['tgl_tanggapan'];
	$tanggapan =$_POST['tanggapan'];
    $id_petugas =$_POST['id_petugas'];
	
	

		$sql=mysqli_query($koneksi, "UPDATE tanggapan SET
		id_pengaduan='$id_pengaduan',
		tgl_tanggapan='$tgl_tanggapan',
		tanggapan='$tanggapan',
        id_petugas='$id_petugas' WHERE id_tanggapan = '$id_tanggapan'");
		if ($sql) {
			echo "
		<script>
	alert('data berhasil di edit')
	document.location.href= 'data_tanggapan.php';
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