<?php
include "koneksi/koneksi.php";

$id = $_GET['id_pengaduan'];
$sql = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan=$id");
$file = mysqli_fetch_array($sql);


?>

<?php include "header.php" ?>

<div id="page-wrapper">
	<div class="main-page">
		
		<h4 class="form-weight-bold">Edit Data</h4>
		<form action="proses_tambah_pengaduan.php" method="post" enctype="multipart/form-data">
			<div>
				<label for="id_pengaduan">id_pengaduan</label>
				<input type="text" name="id_pengaduan" value="<?= $file['id_pengaduan']?>" id="id_pengaduan" class=" form-control">
			</div>
			<div class="form-group">
				<label for="tgl_pengaduan">tgl_pengaduan</label>
				<input type="date" name="tgl_pengaduan" value="<?= $file['tgl_pengaduan']?>" id="tgl_pengaduan" class="form-control">
			</div>

		<div class="form-group">
			<label for="nik">nik</label>
			<input type="number" name="nik" value="<?= $file['nik']?>" id="nik" class="form-control">
		</div>
		<div class="form-group">
			<label for="isi_laporan">isi_laporan</label>
			<input type="text" name="isi_laporan" value="<?= $file['isi_laporan']?>" id="isi_laporan" class="form-control">
		</div>
        <div class="form-group">
				<label for="foto">foto</label>
				<input type="file" name="foto" id="foto" accept=".pmg,.jpg" class="form-control">
			</div>
		<div class="form-group">
			<label for="status">status</label>
			<input type="text" name="status" value="<?= $file['status']?>" id="status" class="form-control">
		</div>
			<input type="submit" value="update" name="update" class="btn btn-sm btn-primary">
				}
			</div>
			</div>
		</form>
	</div>
</div> 