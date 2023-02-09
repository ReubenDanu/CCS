<?php
include "koneksi/koneksi.php";

$id = $_GET['id_tanggapan'];
$sql = mysqli_query($koneksi, "SELECT * FROM tanggapan WHERE id_tanggapan=$id");
$file = mysqli_fetch_array($sql);


?>

<?php include "header.php" ?>

<div id="page-wrapper">
	<div class="main-page">
		
		<h4 class="form-weight-bold">Edit Data</h4>
		<form action="proses_tambah_tanggapan.php" method="post" enctype="multipart/form-data">
			<div>
				<label for="id_tanggapan">id_tanggapan</label>
				<input type="number" name="id_tanggapan" value="<?= $file['id_tanggapan']?>" id="id_tanggapan" class=" form-control">
			</div>
			<div class="form-group">
				<label for="id_pengaduan">id_pengaduan</label>
				<input type="number" name="id_pengaduan" value="<?= $file['id_pengaduan']?>" id="id_pengaduan" class="form-control">
			</div>

		<div class="form-group">
			<label for="tgl_tanggapan">tgl_tanggapan</label>
			<input type="date" name="tgl_tanggapan" value="<?= $file['tgl_tanggapan']?>" id="tgl_tanggapan" class="form-control">
		</div>
		<div class="form-group">
			<label for="tanggapan">tanggapan</label>
			<input type="text" name="tanggapan" value="<?= $file['tanggapan']?>" id="tanggapan" class="form-control">
		</div>
        <div class="form-group">
			<label for="id_petugas">id_petugas</label>
			<input type="number" name="id_petugas" value="<?= $file['id_petugas']?>" id="id_petugas" class="form-control">
		</div>
			<input type="submit" value="update" name="update" class="btn btn-sm btn-primary">
				}
			</div>
			</div>
		</form>
	</div>
</div> 