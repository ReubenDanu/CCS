<?php
include "koneksi/koneksi.php";

if (isset($_POST['ubah'])) {
	$id_pengaduan = $_POST['id_pengaduan'];
	$tgl_pengaduan = $_POST['tgl_pengaduan'];	
    $nik = $_POST['nik'];
	$isi_laporan = $_POST['isi_laporan'];
	$foto=time(). ".jpg";
	$status = $_POST['status'];
	$path ="assets/images";
	if (empty($_FILES['foto']['tmp_name'])) {
		//empty adalah menghasilkan nilai true hanya divariable

		$sql= mysqli_query($koneksi, "UPDATE pengaduan SET 
    tgl_pengaduan='$tgl_pengaduan,
    nik='$nik',
	isi_laporan='$isi_laporan',
	status='$status' WHERE id_pengaduan = '$id_pengaduan'");

		if ( $sql) {
			echo "
	<script>
	alert('Data berhasil diedit');
	document.location.href= 'data_pengaduan.php';
	</script>
	";
		} else{
			echo "
	<script>
	alert('Data gagal diedit');
	</script>
	";
		}
	} else {
		//dengan image
		if (move_uploaded_file($_FILES['foto']['tmp_name'], $path . $foto)) {

			// get data buku
			$buku = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan IN ('$id_pengaduan')");
			//ambil value image
			$gambar = mysqli_fetch_object($buku);
			//path upload gambar
			$path = "assets/images";

			//is_file dia ngecek, gambarnya ada atau nggak
			//true kalo exist, false, kalo nggak ada
			if (is_file($path . $foto->foto)) {
				unnik($path . $foto->foto);
			}
			$sql = mysqli_query($koneksi, "UPDATE pengaduan SET
		tgl_pengaduan='$tgl_pengaduan',
		nik='$nik',
		foto= '$foto',
		isi_laporan='$isi_laporan',
	    status='$status' WHERE id_pengaduan = '$id_pengaduan'");

			if ($sql) {
				echo "
			<script>
			alert('Data berhasil di edit');
			document.location.href= 'data_pengaduan.php';
			</script>
			";
		} else {
			echo "
		<script>
		alert('Data gagal diedit');
		</script>
		";
			}
		}
		//echo "$sql";
	}
}
?>