<?php
include 'koneksi/koneksi.php';
include 'header.php';
?>
		<div id="page-wrapper">
			<div class="main-page">
				<h4 class="form-weight-bold">Tambah Pengaduan</h4>
				<form action="proses_tambah_pengaduan.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="id_pengaduan">id_pengaduan</label>
						<input type="number" name="id_pengaduan" id="id_pengaduan" class="form-control">
						</div>

					<div class="form-group">
						<label for="tgl_pengaduan">tgl_pengaduan</label>
						<input type=date name="tgl_pengaduan" id="tgl_pengaduan" class="form-control">
					</div>

					<div class="form-group">
						<label for="nik">nik</label>
						<input type="number" name="nik" id="nik" class="form-control">
					</div>
					
					<div class="form-group">
						<label for="isi_laporan">isi_laporan</label>
						<input type="text" name="isi_laporan" id="isi_laporan" class="form-control">
					</div>

					<div class="form-group">
						<label for="foto">foto</label>
						<input type="file" name="foto" id="foto" class="form-control">
					</div>
					<div class="form-group">
						<label for="status">status</label>
						<input type="text" name="status" id="status" class="form-control">
					</div>
					<input type="submit" value="Simpan" name="simpan" class="btn btn-sm btn-primary">
					<a href="data_pengaduan.php" class="btn btn-sm btn-danger">Lihat Data</a>
				</form>

			</div>
		</div>


<?php
include 'footer.php';
?>